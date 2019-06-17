<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect("/login");
});

Auth::routes();

Route::group(['middleware'=>['isadmin']],function(){
    Route::get('/uselesshome','HomeController@uselessIndex');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/add-course','CourseController@add');
    Route::post('/store-course','CourseController@store');
    Route::get('/add-class','ClassController@add');
    Route::post('/store-class','ClassController@store');
    Route::get('/view-all-class','ClassController@viewAllClass');
    Route::get('/view-all-course','CourseController@viewAllCourse');
    Route::get('/delete-course/{id}','CourseController@deleteCourse');
    
});
Route::group(['middleware'=>['isteacher']],function(){
    Route::get('/teacher/home','TeacherHomeController@index');
    Route::get('/teacher/uselesshome','TeacherHomeController@uselessIndex');
    
});
Route::group(['middleware'=>['ismember']],function(){
    Route::get('/user/uselesshome','MemberHomeController@uselessIndex');
    Route::get('/user/home','MemberHomeController@index');
    Route::get('/register-class/{class_id}/{id}','ClassController@registerClass');
    
});
Route::get('/change-password','CustomAuthController@editPassword');
    Route::post('/update-password/{id}','CustomAuthController@updatePassword');
    Route::get('/view-class-detail/{id}','ClassController@viewClassDetail');
