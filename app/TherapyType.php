<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TherapyType extends Model
{
    protected $fillable = ['code','name'];

    public function name(){
        return $this->belongsTo('App\Therapy','therapy_type_id','id');
    }
}
