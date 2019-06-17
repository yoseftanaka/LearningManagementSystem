<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable=['start_time','end_time'];
    public function userClass(){
        return $this->hasMany('App\UserClass');
    }
}
