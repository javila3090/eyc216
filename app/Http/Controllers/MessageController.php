<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Missive;

class MessageController extends Controller
{
    public function message()
    {
        return view('members.message');
    }

    public function message_store(Request $request){
        $this->validate($request, [
            'subject' => 'required',
            'message' => 'required'
        ]);

        $request->request->add(['member_id' => \Auth::guard('members')->user()->id]);

        Missive::create($request->all());

        //Mail::to('informaciones@vitamedica.cl')->bcc(['javila3090@gmail.com','carlosananias2008@gmail.com'])->send(new NewMessageMail($request->name,$request->email,$request->message));

        return response()->json(['message' => 'OK']);
    }

    public function message_details($id){

        $message=Missive::findOrFail($id);

        return view('members.message-details',compact('message'));
    }
}
