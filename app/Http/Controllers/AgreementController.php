<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Agreement;

class AgreementController extends Controller
{
    public function index(Request $request){
        $agreements = Agreement::all();
        $unread_agreements = Agreement::where('read_at',NULL)->count();
        $read_agreements = Agreement::where('read_at','!=','')->count();

        //Actualizando array de la sesión para cambiar el numero de mensajes no leídos
        $request->session()->forget('unread_agreements');

        session(['unread_agreements' => $unread_agreements]);

        return view('admin.agreements.index',compact('agreements','unread_agreements','read_agreements'));
    }

    public function store(){
        $rules = array(
            'name' => 'required|string',
            'email' => 'required|string|email|max:255',
            'phone' => 'required',
            'commune' => 'required',
            'address' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            $messages = $validator->messages();
            return redirect('/convenio/solicitar')->withErrors($messages);

        }else{

            //Guardamos nombre y nombreOriginal en la BD
            $agreement = new Agreement();
            $agreement->name = Input::get('name');
            $agreement->email = Input::get('email');
            $agreement->phone = Input::get('phone');
            $agreement->address = Input::get('address');
            $agreement->company = Input::get('company');
            $agreement->commune = Input::get('commune');
            $agreement->comments = Input::get('comments');
            $agreement->save();

        }
        return redirect('/convenio/solicitar')->with('message', '¡Su solicitud ha sido enviada con éxito!');
    }

    public function show(Request $request, $id){
        $agreement = Agreement::findOrFail($id);

        if($agreement->read_at==NULL){
            $now = date('Y-m-d H:i:s');
            $agreement->read_at=$now;
            $agreement->update();

            //Actualizando array de la sesión para cambiar el numero de cotizaciones no leídas
            $request->session()->forget('unread_agreements');

            $unread_agreements = Agreement::where('read_at',NULL)->count();
            session(['unread_agreements' => $unread_agreements]);
        }

        return view('admin.agreements.show',compact('agreement'));
    }

    public function destroy ($id){
        try {
            $agreement = Agreement::findOrFail($id);
            $agreement->delete();

            return response()->json(['message' => 'Ok']);
        }
        catch (\Exception $e) {
            return response()->json(['message' => $e]);
        }
    }
}
