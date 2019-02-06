<?php

namespace App\Http\Controllers;

use App\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
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

    public function index(){

        $calendar=Calendar::where('level',\Auth::guard('members')->user()->level)
                    ->orWhere('level',4)
                    ->orWhere('member_id', '=', \Auth::guard('members')->user()->id)
                    ->get();

        return response()->json($calendar);
    }
}
