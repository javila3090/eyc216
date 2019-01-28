<?php

namespace App\Http\Controllers;

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
        return view('members.dashboard',compact('companyInfo'));
    }
}