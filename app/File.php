<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'name', 'description', 'type','level','url','user_id'
    ];

    public function getCreatedAtAttribute()
    {
        return date('d-m-Y H:i:s', strtotime($this->attributes['created_at']));
    }
}
