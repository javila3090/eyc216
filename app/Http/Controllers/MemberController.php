<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use App\CompanyInfo;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('member');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();
        $files_sec = File::where('type',1)->get();
        $files_vig = File::where('type',2)->get();
        $files_lib = File::where('type',3)->get();
        $files_lec = File::where('type',4)->get();
        return view('members.dashboard',compact('companyInfo','files_sec','files_vig','files_lib','files_lec'));
    }

    public function secretary()
    {
        $files = File::where('type',1)->get();
        return view('members.dashboard',compact('companyInfo'));
    }
}