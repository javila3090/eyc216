<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberRole extends Model
{
    protected $table = 'member_role';

    protected $fillable = ['user_id','role_id'];

}
