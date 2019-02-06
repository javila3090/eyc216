<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = ['title','start','end','level','member_id'];

    public function member(){
        return $this->belongsTo('App\Member','id','member_id');
    }
}
