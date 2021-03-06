<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title','content','image','tag_id'];

	public function tag(){
		return $this->belongsTo('App\Tag');
	}
}
