<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserClass extends Model
{
    protected $fillable=['user_id','course_id','teacher_id'];

    public function course(){
        return $this->belongsTo('App\Course');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function day(){
        return $this->belongsTo('App\Day');
    }
    public function shift(){
        return $this->belongsTo('App\Shift');
    }
    public function classDetail(){
        return $this->hasMany('App\UserClassDetail');
    }
}
