<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use App\CompanyInfo;
use App\TherapyType;
use App\Therapy;
use App\Quote;
use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;
use Mapper;

class QuoteController extends Controller
{
    public function index(){

        SEO::setTitle('Cotizar');
        SEO::setDescription('Quotes page to Vitamedica');
        SEO::opengraph()->setUrl('https://vitamedicasite.julioavila.com.ve/cotizar');
        SEO::setCanonical('https://vitamedicasite.julioavila.com.ve');
        SEO::opengraph()->addProperty('type', 'quotes');
        SEO::twitter()->setSite('@jcesaravila');
        
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();
        $therapy_types = TherapyType::all();

        //Mapa
        /*$config = array();
        $config['center'] = '-33.423199,-70.610193';
        $config['zoom'] = 16;
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
                });
            }
            centreGot = true;';

        app('map')->initialize($config);

        $marker = array();
        app('map')->add_marker($marker);

        $map = app('map')->create_map();
        $map = array('map_js' => $map['js'], 'map_html' => $map['html']);*/
	
	Mapper::map(-33.4225765,-70.61018609999996, ['zoom' => 16, 'markers' => ['title' => 'Vitamedica', 'animation' => 'DROP']]);

        return view('quote',compact('therapy_types','companyInfo'));
    }

    public function store(){
        $rules = array(
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'start_date' => 'required',
            'start_hour' => 'required',
            'pay_way' => 'required',
	    'image' => 'mimes:jpeg,jpg,png',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            $messages = $validator->messages();
            return redirect('/cotizar')->withErrors($messages);

        }else{

            $file = Input::file('image');

            if($file != ""){
                //Creamos una instancia de la libreria instalada   
                $image = Image::make(Input::file('image'));
                //Ruta donde queremos guardar las imagenes
                $path = public_path().'/uploads/quotes/';
                // Guardar Original
                //$image->save($path.$file->getClientOriginalName());
                // Cambiar de tamaño
                //$image->resize(300,500);
                // Guardar
                $image->save($path.$file->getClientOriginalName());
            }
            //Guardamos nombre y nombreOriginal en la BD
            $quote = new Quote();
            $quote->name = Input::get('name');
            $quote->email = Input::get('email');
            $quote->phone = Input::get('phone');
            $quote->start_date = Input::get('start_date');
            $quote->start_hour = Input::get('start_hour');
            $quote->pay_way = Input::get('pay_way');
            $quote->comments = Input::get('comments');
            if($file != ""){
                $quote->image = 'uploads/quotes/'.$file->getClientOriginalName();
            }
            $quote->save();

            $quantity=input::get('quantity');
            $therapy_type_id=input::get('therapy_type_id');

            foreach($quantity as $key=>$item){
                if($item!=null && $item>0){
                    $therapies = new Therapy();
                    $therapies->quantity = $item;
                    $therapies->therapy_type_id = $therapy_type_id[$key];
                    $therapies->quote_id = $quote->id;
                    $therapies->save();
                }
            }
        }
        return redirect('/cotizar')->with('message', '¡Cotización enviada con éxito!');
    }

    public function index_admin(Request $request)
    {
        $quotes = Quote::all();
        $unread_quotes = Quote::where('read_at',NULL)->count();
        $read_quotes = Quote::where('read_at','!=','')->count();

        //Actualizando array de la sesión para cambiar el numero de mensajes no leídos
        $request->session()->forget('unread_quotes');

        session(['unread_quotes' => $unread_quotes]);

        return view('admin.quotes.index',compact('quotes','unread_quotes','read_quotes'));
    }

    public function show(Request $request, $id){
        $quote = Quote::findOrFail($id);

        if($quote->read_at==NULL){
            $now = date('Y-m-d H:i:s');
            $quote->read_at=$now;
            $quote->update();

            //Actualizando array de la sesión para cambiar el numero de cotizaciones no leídas
            $request->session()->forget('unread_quotes');

            $unread_quotes = Quote::where('read_at',NULL)->count();
            session(['unread_quotes' => $unread_quotes]);
        }

        return view('admin.quotes.show',compact('quote'));
    }

    public function destroy ($id){
        try {
            $quote = Quote::findOrFail($id);
            $quote->delete();

            return response()->json(['message' => 'Ok']);
        }
        catch (\Exception $e) {
            return response()->json(['message' => $e]);
        }
    }    

    public function download ($id){

        $quote = Quote::findOrFail($id);

        return response()->download($quote->image);
    }
}
