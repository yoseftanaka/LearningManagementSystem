<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable = ['day_name'];
    public function userClass(){
        return $this->hasMany('App\userClass');
    }
}
