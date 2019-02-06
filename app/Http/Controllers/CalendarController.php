<?php

namespace App\Http\Controllers;

use App\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

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

    public function create(){
        return view('members.createEvent');
    }

    public function show($id){
        $event = Calendar::findOrFail($id);
        return view('members.showEvent',compact('event'));
    }

    public function store(){

        $rules = array(
            'title' => 'required',
            'start' => 'required',
            'level' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            $messages = $validator->messages();
            return redirect('/miembros/evento')->withErrors($messages);

        }else{

            $calendar=new Calendar();
            $calendar->title=Input::get('title');
            $calendar->description=Input::get('description');
            $calendar->start=Input::get('start');
            $calendar->end=Input::get('end');
            $calendar->level=Input::get('level');
            $calendar->member_id=\Auth::guard('members')->user()->id;
            $calendar->save();

        }
        return redirect('/miembros/evento')->with('message', '¡Evento creado con éxito!');
    }

    public function destroy($id){
        $event = Calendar::findOrFail($id);
        $event->delete();

        return redirect('/miembros')->with('message', '¡Evento eliminado con éxito!');
    }
}
