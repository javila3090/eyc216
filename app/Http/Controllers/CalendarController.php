<?php

namespace App\Http\Controllers;

use App\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(){
        /*$calendar=Calendar::where(function ($query) {
                $query->where('level', '=', \Auth::guard('members')->user()->level)
                    ->orWhere('level', '=', 4);
            })->get();*/
        $calendar=Calendar::all();
        return $calendar;
    }
}
