<?php

namespace App\Http\Controllers;

use App\File;
use App\Missive;
use App\Role;
use Illuminate\Http\Request;
use App\CompanyInfo;
use Illuminate\Support\Facades\DB;

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

        if(\Auth::guard('members')->user()->level==1){
            $files_sec = File::where('type',1)->get();
            $files_vig = File::where('type',2)->get();
            $files_lib = File::where('type',3)->get();
            $files_lec = File::where('type',4)->get();
            $messages = Missive::where('level',\Auth::guard('members')->user()->level)
                ->orWhere('level',4)->get();
        }else{
            $files_sec=File::where('type', '=', 1)
                ->where(function ($query) {
                    $query->where('level', '=', \Auth::guard('members')->user()->level)
                        ->orWhere('level', '=', 4)
                        ->orWhere('user_id', '=', \Auth::guard('members')->user()->id);
                })->get();
            $files_vig=File::where('type', '=', 2)
                ->where(function ($query) {
                    $query->where('level', '=', \Auth::guard('members')->user()->level)
                        ->orWhere('level', '=', 4)
                        ->orWhere('user_id', '=', \Auth::guard('members')->user()->id);
                })->get();
            $files_lib=File::where('type', '=', 3)
                ->where(function ($query) {
                    $query->where('level', '=', \Auth::guard('members')->user()->level)
                        ->orWhere('level', '=', 4)
                        ->orWhere('user_id', '=', \Auth::guard('members')->user()->id);
                })->get();
            $files_lec=File::where('type', '=', 4)
                ->where(function ($query) {
                    $query->where('level', '=', \Auth::guard('members')->user()->level)
                        ->orWhere('level', '=', 4)
                        ->orWhere('user_id', '=', \Auth::guard('members')->user()->id);
                })->get();
            $messages=Missive::where(function ($query) {
                    $query->where('level', '=', \Auth::guard('members')->user()->level)
                        ->orWhere('level', '=', 4)
                        ->orWhere('member_id', '=', \Auth::guard('members')->user()->id);
                })->get();
        }

        return view('members.dashboard',compact('companyInfo','files_sec','files_vig','files_lib','files_lec','messages'));
    }

    public function secretary()
    {
        $files = File::where('type',1)->get();
        return view('members.dashboard',compact('companyInfo'));
    }
}