<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Therapy extends Model
{
    protected $fillable = ['quantity','therapy_type_id','quote_id'];

    public function quote(){
        return $this->belongsTo('App\Quote','id','quote_id');
    }

    public function therapy_type(){
        return $this->hasOne('App\TherapyType','id','therapy_type_id');
    }
}
