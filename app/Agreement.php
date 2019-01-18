<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    protected $fillable = ['name','email','phone','commune','address','company','comments'];


    public function getCreatedAtAttribute()
    {
        return date('d-m-Y H:i:s', strtotime($this->attributes['created_at']));
    }
}
