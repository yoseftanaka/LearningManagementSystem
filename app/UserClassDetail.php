<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserClassDetail extends Model
{
    protected $fillable=['class_id','user_id'];

    public function userClass(){
        return $this->belongsTo('App\UserClass');
    }
}
