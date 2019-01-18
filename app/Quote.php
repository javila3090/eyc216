<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = ['name','email','phone','start_date','start_hour','pay_way','comments'];

    public function getPayWayAttribute()
    {
        if($this->attributes['pay_way']==1){
            return 'Fonasa';
        }else if($this->attributes['pay_way']==2){
            return 'Isapre';
        }else{
            return 'Particular';
        }
    }

    public function therapy(){
        return $this->hasMany('App\Therapy','quote_id','id');
    }

    public function getStartDateAttribute()
    {
        return date('d-m-Y', strtotime($this->attributes['start_date']));
    }

    public function getCreatedAtAttribute()
    {
        return date('d-m-Y H:i:s', strtotime($this->attributes['created_at']));
    }
}
