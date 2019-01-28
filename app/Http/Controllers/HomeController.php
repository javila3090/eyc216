<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Banner;
use App\BannerType;
use App\Section;
use App\CompanyInfo;
use App\Post;
use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;
use Mapper;

class HomeController extends Controller
{
    public function index(){

        SEOMeta::setTitle('Inicio');
        SEOMeta::setDescription('Home page to Escuadra y Compas 216');
        SEOMeta::setCanonical('https://escuadraycompas.cl');

        OpenGraph::setDescription('Home page to Escuadra y Compas 216');
        OpenGraph::setTitle('Inicio');
        OpenGraph::setUrl('https://escuadraycompas.cl');
        OpenGraph::addProperty('type', 'home');

        Twitter::setTitle('Homepage');
        Twitter::setSite('@jcesaravila');

        ## Or

        SEO::setTitle('Inicio');
        SEO::setDescription('Home page to Escuadra y Compas 216');
        SEO::opengraph()->setUrl('https://escuadraycompas.cl');
        SEO::setCanonical('https://escuadraycompas.cl');
        SEO::opengraph()->addProperty('type', 'home');
        SEO::twitter()->setSite('@jcesaravila');

        $homeBanners = Banner::where('banner_type_id',1)->get();
        $aboutUs = Section::where('section_type_id',1)->first();
        $servicesBanners = Banner::where('banner_type_id',2)->get();
        $services = Section::where('section_type_id',2)->first();
        $contact = Section::where('section_type_id',3)->first();
        $galleryBanners = Banner::where('banner_type_id',3)->get();
        $gallery = Section::where('section_type_id',4)->first();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();
        $secondary = Section::where('section_type_id',7)->first();
        $secondaryBanner = Banner::where('banner_type_id',6)->get();
        $clients = Section::where('section_type_id',5)->first();
        $clientBanners = Banner::where('banner_type_id',4)->get();
        $team = Section::where('section_type_id',10)->first();
        $whyus = Section::where('section_type_id',11)->first();
        $whyusBanners = Banner::where('banner_type_id',7)->get();

        return view('welcome',compact('homeBanners','aboutUs','servicesBanners','services','companyInfo','contact','gallery','galleryBanners','secondary','secondaryBanner','clients','clientBanners','team','whyus','whyusBanners'));
    }

    public function contact(){

        SEOMeta::setTitle('Contacto');
        SEOMeta::setDescription('Contact page to Escuadra y Compas 216');
        SEOMeta::setCanonical('https://escuadraycompas.cl');

        OpenGraph::setDescription('Contact page to Escuadra y Compas 216');
        OpenGraph::setTitle('Contacto');
        OpenGraph::setUrl('https://escuadraycompas.cl/contacto');
        OpenGraph::addProperty('type', 'contact');

        Twitter::setTitle('Contacto');
        Twitter::setSite('@jcesaravila');

        ## Or

        SEO::setTitle('Contacto');
        SEO::setDescription('Contact page to Escuadra y Compas 216');
        SEO::opengraph()->setUrl('https://escuadraycompas.cl/contacto');
        SEO::setCanonical('https://escuadraycompas.cl');
        SEO::opengraph()->addProperty('type', 'contact');
        SEO::twitter()->setSite('@jcesaravila');

        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();
        
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

        Mapper::map(-33.4225765,-70.61018609999996, ['zoom' => 16, 'markers' => ['title' => 'Escuadra y Compas 216', 'animation' => 'DROP']]);

        return view('contact',compact('companyInfo'));
    }

    public function quote(){

        SEOMeta::setTitle('Cotizar');
        SEOMeta::setDescription('Quotes page to Escuadra y Compas 216');
        SEOMeta::setCanonical('https://escuadraycompas.cl');

        OpenGraph::setDescription('Quotes page to Escuadra y Compas 216');
        OpenGraph::setTitle('Cotizar');
        OpenGraph::setUrl('https://escuadraycompas.cl/cotizar');
        OpenGraph::addProperty('type', 'quote');

        Twitter::setTitle('Cotizar');
        Twitter::setSite('@jcesaravila');

        ## Or

        SEO::setTitle('Cotizar');
        SEO::setDescription('Quote page to Escuadra y Compas 216');
        SEO::opengraph()->setUrl('https://escuadraycompas.cl/cotizar');
        SEO::setCanonical('https://escuadraycompas.cl');
        SEO::opengraph()->addProperty('type', 'quote');
        SEO::twitter()->setSite('@jcesaravila');        

        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('quote',compact('companyInfo'));
    }

    public function services(){

        $servicesBanner = Banner::where('banner_type_id',2)->get();
        $services = Section::where('section_type_id',2)->first();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('services',compact('servicesBanner','services','companyInfo'));
    }

    public function aboutUs(){

        SEOMeta::setTitle('Nosotros');
        SEOMeta::setDescription('About us page to Escuadra y Compas 216');
        SEOMeta::setCanonical('https://escuadraycompas.cl');

        OpenGraph::setDescription('Quotes page to Escuadra y Compas 216');
        OpenGraph::setTitle('Nosotros');
        OpenGraph::setUrl('https://escuadraycompas.cl/nosotros');
        OpenGraph::addProperty('type', 'about us');

        Twitter::setTitle('Nosotros');
        Twitter::setSite('@jcesaravila');

        ## Or

        SEO::setTitle('Nosotros');
        SEO::setDescription('About us page to Escuadra y Compas 216');
        SEO::opengraph()->setUrl('https://escuadraycompas.cl/nosotros');
        SEO::setCanonical('https://escuadraycompas.cl');
        SEO::opengraph()->addProperty('type', 'about us');
        SEO::twitter()->setSite('@jcesaravila');    

        $aboutUs = Section::where('section_type_id',1)->first();
        $mission = Section::where('section_type_id',8)->first();
        $vision = Section::where('section_type_id',9)->first();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();
        $clients = Section::where('section_type_id',5)->first();
        $clientBanners = Banner::where('banner_type_id',4)->get();
        $partners = Section::where('section_type_id',6)->first();
        $partnerBanners = Banner::where('banner_type_id',5)->get();
        $requirements = Section::where('section_type_id',12)->first();
        $special_atentions = Section::where('section_type_id',13)->first();
        $company_programs = Section::where('section_type_id',14)->first();

        return view('about',compact('aboutUs','clientBanners','clients','companyInfo','mission','vision','partners','partnerBanners','requirements','special_atentions','company_programs'));
    }

    public function requirements(){

        SEO::setTitle('Requisitos');
        SEO::setDescription('Requirements page to Escuadra y Compas 216');
        SEO::opengraph()->setUrl('https://escuadraycompas.cl/requisitos');
        SEO::setCanonical('https://escuadraycompas.cl');
        SEO::opengraph()->addProperty('type', 'requirements');
        SEO::twitter()->setSite('@jcesaravila');    

        $aboutUs = Section::where('section_type_id',1)->first();
        $special_atentions = Section::where('section_type_id',13)->first();
        $company_programs = Section::where('section_type_id',14)->first();
        $requirements = Section::where('section_type_id',12)->first();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('requirements',compact('aboutUs','requirements','special_atentions','company_programs','companyInfo'));
    }

    public function blog(){

        $posts = Post::orderBy('created_at', 'desc')->get();
        $last_posts = Post::orderBy('created_at', 'desc')->take(5)->get();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('blog',compact('posts','last_posts','companyInfo'));
    }

    public function post($id){

        $post = Post::findOrFail($id);
        $last_posts = Post::orderBy('created_at', 'desc')->take(5)->get();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('post',compact('post','last_posts','companyInfo'));
    }

    public function agreement(){

        SEO::setTitle('Convenios');
        SEO::setDescription('Agreements page to Escuadra y Compas 216');
        SEO::opengraph()->setUrl('https://escuadraycompas.cl/convenios');
        SEO::setCanonical('https://escuadraycompas.cl');
        SEO::opengraph()->addProperty('type', 'agreements');
        SEO::twitter()->setSite('@jcesaravila'); 

        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('agreement',compact('companyInfo'));
    }

    public function entities(){

        SEO::setTitle('Entidades');
        SEO::setDescription('Entities page to Escuadra y Compas 216');
        SEO::opengraph()->setUrl('https://escuadraycompas.cl/entidades');
        SEO::setCanonical('https://escuadraycompas.cl');
        SEO::opengraph()->addProperty('type', 'entities');
        SEO::twitter()->setSite('@jcesaravila'); 

        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('fonasa_isapre',compact('companyInfo'));
    }

    public function kinesiologist(){
        
        SEO::setTitle('Kinesiología');
        SEO::setDescription('Kinesiologist page to Escuadra y Compas 216');
        SEO::opengraph()->setUrl('https://escuadraycompas.cl/kinesiologia');
        SEO::setCanonical('https://escuadraycompas.cl');
        SEO::opengraph()->addProperty('type', 'kinesiologist');
        SEO::twitter()->setSite('@jcesaravila');      

        $kinesiologist = Section::where('section_type_id',15)->first();
        $kinesiologist_areas = Banner::where('banner_type_id',11)->get();
        $tips = Banner::where('banner_type_id',10)->get();
        $symptoms = Banner::where('banner_type_id',9)->get();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('kinesiologist',compact('companyInfo','kinesiologist','kinesiologist_areas','tips','symptoms'));
    }

    public function kinesiologist_areas(){

        SEO::setTitle('Areas');
        SEO::setDescription('Areas page to Escuadra y Compas 216');
        SEO::opengraph()->setUrl('https://escuadraycompas.cl/kinesiologia-areas');
        SEO::setCanonical('https://escuadraycompas.cl');
        SEO::opengraph()->addProperty('type', 'areas');
        SEO::twitter()->setSite('@jcesaravila'); 

        $kinesiologist = Section::where('section_type_id',15)->first();
        $kinesiologist_areas = Banner::where('banner_type_id',11)->get();
        $tips = Banner::where('banner_type_id',10)->get();
        $symptoms = Banner::where('banner_type_id',9)->get();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('kinesiologist_areas',compact('companyInfo','kinesiologist','kinesiologist_areas','tips','symptoms'));
    }

    public function information(){

        SEO::setTitle('Información');
        SEO::setDescription('Information page to Escuadra y Compas 216');
        SEO::opengraph()->setUrl('https://escuadraycompas.cl/informacion-util');
        SEO::setCanonical('https://escuadraycompas.cl');
        SEO::opengraph()->addProperty('type', 'information');
        SEO::twitter()->setSite('@jcesaravila');         

        $kinesiologist = Section::where('section_type_id',15)->first();
        $kinesiologist_areas = Banner::where('banner_type_id',11)->get();
        $tips = Banner::where('banner_type_id',10)->get();
        $symptoms = Banner::where('banner_type_id',9)->get();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('information',compact('companyInfo','kinesiologist','kinesiologist_areas','tips','symptoms'));
    }

    public function symptoms(){

        SEO::setTitle('Síntomas');
        SEO::setDescription('Symptoms page to Escuadra y Compas 216');
        SEO::opengraph()->setUrl('https://escuadraycompas.cl/sintomas');
        SEO::setCanonical('https://escuadraycompas.cl');
        SEO::opengraph()->addProperty('type', 'symptoms');
        SEO::twitter()->setSite('@jcesaravila'); 

        $kinesiologist = Section::where('section_type_id',15)->first();
        $kinesiologist_areas = Banner::where('banner_type_id',11)->get();
        $tips = Banner::where('banner_type_id',10)->get();
        $symptoms = Banner::where('banner_type_id',9)->get();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('symptoms',compact('companyInfo','kinesiologist','kinesiologist_areas','tips','symptoms'));
    }

    public function videos(){

        SEO::setTitle('Videos');
        SEO::setDescription('Videos page to Escuadra y Compas 216');
        SEO::opengraph()->setUrl('https://escuadraycompas.cl/videos');
        SEO::setCanonical('https://escuadraycompas.cl');
        SEO::opengraph()->addProperty('type', 'videos');
        SEO::twitter()->setSite('@jcesaravila'); 

        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        return view('videos',compact('companyInfo'));
    }
}
