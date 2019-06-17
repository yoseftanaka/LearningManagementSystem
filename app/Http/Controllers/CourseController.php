<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function add(){
        return view('add_course');
    }
    public function store(Request $request){
        $course = new Course();
        $course->course_name = $request['course_name'];
        $course->save();
        return redirect('/view-all-course');
    }

    public function viewAllCourse(){
        $courses = Course::all();
        return view("view_all_course",compact('courses'));
    }

    public function deleteCourse($id){
        $course = Course::find($id);
        $course->delete();
        return back();
    }
}
