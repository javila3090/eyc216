<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Missive extends Model
{
    protected $fillable = ['subject','message','level','open','member_id'];

    public function member(){
        return $this->belongsTo('App\Member');
    }

    public function getCreatedAtAttribute()
    {
        return date('d-m-Y H:i:s', strtotime($this->attributes['created_at']));
    }
}
