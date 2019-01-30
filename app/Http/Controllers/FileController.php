<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FileController extends Controller
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

    public function create(Request $request, $type)

    {
        if($type==1){
            \Auth::guard('members')->user()->authorizeRoles(['admin', 'secretary']);
        }elseif($type==2){
            \Auth::guard('members')->user()->authorizeRoles(['vigilant_1', 'vigilant_2']);
        }

        return view('members.uploadFile',compact('type'));

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)
    {

        $rules = array(
            'filename' => 'required',
            'filename' => 'mimes:doc,pdf,docx,zip,csv,xls'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return redirect()->route('members.upload.form',$request->type)->withErrors($messages);
        }else {
            $data = $request->file('filename');
            $request->filename->move(public_path("/uploads/files"), $request->filename->getClientOriginalName());

            $file = new File();
            $file->name = $request->name;
            $file->description = $request->description;
            $file->type = $request->type;
            $file->level = $request->level;
            $file->url = 'uploads/files/'.$data->getClientOriginalName();
            $file->user_id = \Auth::guard('members')->user()->id;
            $file->save();

            return redirect()->route('members.upload.form',$request->type)
                ->with('message','Archivo cargado con éxito');
        }
    }

    public function download ($id){

        $file = File::findOrFail($id);

        return response()->download($file->url);
    }

    public function destroy ($id){

        $file = File::findOrFail($id);
        $file->delete();

        if($file->url){
            unlink(public_path('/'.$file->url));
        }

        return response()->json(['message' => 'Ok']);

    }
}
