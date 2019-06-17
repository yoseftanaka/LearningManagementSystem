<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeacherHomeController extends Controller
{
    public function index(){
        $name = Auth::user()->name;
        $classes = DB::table('user_classes')
        ->join('courses','user_classes.course_id','=','courses.id')
        ->join('users','user_classes.teacher_id','=','users.id')
        ->join('shifts','user_classes.shift','=','shifts.id')
        ->join('days','user_classes.day_id','=','days.id')
        ->select('user_classes.id','courses.course_name','days.day_name','shifts.start_time','shifts.end_time')
        ->where('user_classes.teacher_id',Auth::id())
        ->get();
        return view("teacherhome",compact('classes','name'));
    }

    public function uselessIndex(){
        return view("uselessteacherhome");
    }
}
