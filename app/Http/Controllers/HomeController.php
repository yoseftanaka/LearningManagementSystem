<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\UserClass;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::all();
        $classes = DB::table('user_classes')
        ->join('courses','user_classes.course_id','=','courses.id')
        ->join('users','user_classes.teacher_id','=','users.id')
        ->join('shifts','user_classes.shift','=','shifts.id')
        ->join('days','user_classes.day_id','=','days.id')
        ->select('user_classes.id','users.name','courses.course_name','days.day_name','shifts.start_time','shifts.end_time')
        ->get();
        return view('home',compact('courses','classes'));
    }
    public function uselessIndex(){
        return view("uselesshome");
    }
}
