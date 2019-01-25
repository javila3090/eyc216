<?php

namespace App\Http\Controllers;

use App\Section;
use App\CompanyInfo;
use Illuminate\Http\Request;
use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;
use Mapper;

class PageController extends Controller
{
    public function index(Request $request,$type)
    {
        $content = Section::where('section_type_id',$type)->first();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

        SEOMeta::setTitle($content->title);
        SEOMeta::setDescription($content->title);
        SEOMeta::setCanonical('https://escuadraycompas.cl');

        OpenGraph::setDescription($content->title);
        OpenGraph::setTitle($content->title);
        OpenGraph::setUrl('https://escuadraycompas.cl');
        OpenGraph::addProperty('type', 'home');

        Twitter::setTitle('Homepage');
        Twitter::setSite('@jcesaravila');

        ## Or

        SEO::setTitle($content->title);
        SEO::setDescription($content->title);
        SEO::opengraph()->setUrl('https://escuadraycompas.cl');
        SEO::setCanonical('https://escuadraycompas.cl');
        SEO::opengraph()->addProperty('type', 'home');
        SEO::twitter()->setSite('@jcesaravila');


        return view('page',compact('content','companyInfo'));
    }
}
