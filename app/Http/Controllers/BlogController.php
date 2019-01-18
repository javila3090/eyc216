<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use App\Tag;
use App\Post;

class BlogController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(){

		$posts = Post::all();
		return view('admin.blog.index',compact('posts'));
	}

	public function create(){

		$tags = Tag::pluck('name','id');
		return view('admin.blog.add',compact('tags'));

	}

	public function store(Request $request){


		$rules = array(
			'title' => 'required',
			'tag_id' => 'required',
			'image' => 'mimes:jpeg,jpg,png,gif',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {

			$messages = $validator->messages();
			return redirect('admin/blog/add')->withErrors($messages);        
		}else{

			$file = Input::file('image');

			if($file != ""){
                //Creamos una instancia de la libreria instalada   
				$image = Image::make(Input::file('image'));
                //Ruta donde queremos guardar las imagenes
				$path = public_path().'/uploads/blog/';
                // Guardar Original
                //$image->save($path.$file->getClientOriginalName());
                // Cambiar de tamaño
			//$image->resize(300,500);
                // Guardar
				$image->save($path.$file->getClientOriginalName());
			}
            //Guardamos nombre y nombreOriginal en la BD
			$post = new Post();
			$post->title = Input::get('title');
			$post->content = Input::get('content');
			$post->tag_id = Input::get('tag_id');
			if($file != ""){
				$post->image = 'uploads/blog/'.$file->getClientOriginalName();
			}
			$post->save(); 
		}
		return redirect('admin/blog')->with('message', '¡Registro guardado con éxito!');
	}

	public function edit($id){

		$post = Post::find($id);
		$tags = Tag::pluck('name','id');
		$selected_tag = Tag::where('id',$post->tag_id)->pluck('name','id');

		return view('admin.blog.edit',compact('post','tags','selected_tag'));
	}

	public function update($id){
		$post = Post::find($id);

		$rules = array(
			'title' => 'required',
			'tag_id' => 'required',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {

			$messages = $validator->messages();
			return redirect('admin/blog')->withErrors($messages);

		}else{

			$file = Input::file('image');

			if($file != ""){
                //Creamos una instancia de la libreria instalada   
				$image = Image::make(Input::file('image'));
                //Ruta donde queremos guardar las imagenes
				$path = public_path().'/uploads/blog/';
                // Guardar Original
                //$image->save($path.$file->getClientOriginalName());
                // Cambiar de tamaño
			//$image->resize(300,500);
                // Guardar
				$image->save($path.$file->getClientOriginalName());
			}
            //Guardamos nombre y nombreOriginal en la BD
			$post->title = Input::get('title');
			$post->content = Input::get('content');
			$post->tag_id = Input::get('tag_id');
			if($file != ""){
				$post->image = 'uploads/blog/'.$file->getClientOriginalName();
			}
			$post->update(); 
		}

		return redirect('admin/blog')->with('message', '¡Registro actualizado con éxito!');
	}

	public function destroy ($id){

		$post = Post::findOrFail($id);
		$post->delete();

		if($post->image){
			unlink(public_path('/'.$post->image));
		}

		return response()->json(['message' => 'Ok']);

	}
}
