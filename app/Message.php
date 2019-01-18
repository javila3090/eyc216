<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	protected $fillable = ['name','email','subject','contact_date','message'];

	public function getContactDateAttribute()
	{
		if($this->attributes['contact_date']!=''){
			return date('d-m-Y', strtotime($this->attributes['contact_date']));
		}
	}

	public function getCreatedAtAttribute()
	{
		return date('d-m-Y H:i:s', strtotime($this->attributes['created_at']));
	}
}
