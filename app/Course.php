<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=['course_name'];

    public function classes(){
        return $this->hasMany('App\UserClass');
    }
}
