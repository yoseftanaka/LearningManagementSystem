<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\UserClassDetail;

class MemberHomeController extends Controller
{
    public function index(){
        $registered = UserClassDetail::where('user_id',Auth::id())->get()->first();
        $haveclass=0;
        if($registered){
            $classes = DB::table('user_class_details')
            ->join('user_classes','user_class_details.class_id','=','user_classes.id')
            ->join('courses','user_classes.course_id','=','courses.id')
            ->join('users','user_classes.teacher_id','=','users.id')
            ->join('shifts','user_classes.shift','=','shifts.id')
            ->join('days','user_classes.day_id','=','days.id')
            ->select('user_classes.id','users.name','courses.course_name','days.day_name','shifts.start_time','shifts.end_time')
            ->where('user_class_details.user_id',Auth::id())
            ->get()->first();
            //dd($classes);
            $haveclass=1;
        }
        else{
            $classes = DB::table('user_classes')
            ->join('courses','user_classes.course_id','=','courses.id')
            ->join('users','user_classes.teacher_id','=','users.id')
            ->join('shifts','user_classes.shift','=','shifts.id')
            ->join('days','user_classes.day_id','=','days.id')
            ->select('user_classes.id','users.name','courses.course_name','days.day_name','shifts.start_time','shifts.end_time')
            ->get();
        }
        
        return view("userhome",compact('classes','haveclass'));
    }

    public function uselessIndex(){
        return view("useruselesshome");
    }
}
