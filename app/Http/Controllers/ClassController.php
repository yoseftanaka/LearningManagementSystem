<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserClass;
use App\Course;
use App\User;
use App\Shift;
use App\Day;
use Illuminate\Support\Facades\DB;
use App\UserClassDetail;

class ClassController extends Controller
{
    public function add(){
        $courses = Course::all();
        $lecturers = User::where('role','teacher')->get();
        $shifts = Shift::all();
        $days = Day::all();
        return view('add_class',compact('courses','lecturers','shifts','days'));
    }
    public function store(Request $request){
        $class = new UserClass();
        $class->course_id = $request['course'];
        $class->teacher_id = $request['lecturer'];
        $class->day_id = $request['day'];
        $class->shift = $request['shift'];
        $class->save();
        return redirect('/view-all-class');
    }
    public function viewClassDetail($id){
        $class = DB::table('user_classes')
        ->join('courses','user_classes.course_id','=','courses.id')
        ->join('users','user_classes.teacher_id','=','users.id')
        ->join('shifts','user_classes.shift','=','shifts.id')
        ->join('days','user_classes.day_id','=','days.id')
        ->where('user_classes.id',$id)
        ->get()->first();
        $members = DB::table('user_class_details')
        ->join('users','user_class_details.user_id','=','users.id')
        ->where('user_class_details.class_id',$id)
        ->get();
        return view('view_class_detail',compact('class','members'));
    }
    public function registerClass($class_id  , $id){
        $class = new UserClassDetail();
        $class->class_id = $class_id;
        $class->user_id = $id;
        $class->save();
        return redirect('/user/home');
    }

    public function viewAllClass(){
        $classes = DB::table('user_classes')
        ->join('courses','user_classes.course_id','=','courses.id')
        ->join('users','user_classes.teacher_id','=','users.id')
        ->join('shifts','user_classes.shift','=','shifts.id')
        ->join('days','user_classes.day_id','=','days.id')
        ->select('user_classes.id','users.name','courses.course_name','days.day_name','shifts.start_time','shifts.end_time')
        ->get();
        return view("view_all_class",compact('classes'));
    }
}
