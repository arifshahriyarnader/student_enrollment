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
//view profile
Route::get('/view_profile', 'ViewController@view');
//settings
Route::get('/settings', 'SettingsController@settings');
//logout
Route::get('/logout', 'LogoutController@logout');

Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function(){
	return view('admin/admin_login');

});
Route::post('adminlogin', 'AdminController@login_dashboard');
Route::get('admin_dashboard','AdminController@admin_dashboard');
//Add Student
Route::get('/addstudent', 'AddstudentController@addstudent');
Route::post('/storestudent', 'AddstudentController@storestudent');


//All Student
Route::get('/allstudent', 'AllstudentController@allstudent');
Route::get('/editstudent/{id}','AllstudentController@Edit');
Route::get('/viewstudent/{id}','AllstudentController@View');
Route::post('/updatestudent/{id}', 'AllstudentController@Update');
Route::get('/deletestudent/{id}','AllstudentController@Delete');

//Courses
Route::get('/bba', 'BBAController@bba');
Route::get('/cse', 'CSEController@cse');
Route::get('/eee', 'EEEController@eee');
Route::get('/llb', 'LLBController@llb');
Route::get('/mba', 'MBAController@mba');
Route::get('/tution', 'TutionController@tution');
Route::get('/result', 'ResultController@result');
//Teacher
Route::get('/addteacher', 'TeacherController@addteacher');
Route::post('/storeteacher', 'TeacherController@storeteacher');
Route::get('/allteacher', 'TeacherController@allteacher');
Route::get('/viewteacher/{id}', 'TeacherController@viewteacher');
Route::get('/editteacher/{id}', 'TeacherController@editteacher');
Route::post('/updateteacher/{id}', 'TeacherController@updateteacher');
Route::get('/deleteteacher/{id}', 'TeacherController@deleteteacher');
//student login
Route::post('/studentlogin', 'StudentController@studentlogin');
Route::get('/student_dashboard', 'StudentController@student_dashboard');
Route::get('/studentlogout', 'StudentController@student_logout');
//student profile
Route::get('/student_profile', 'AllstudentController@studentprofile');
Route::get('/student_settings', 'AllstudentController@studentsettings');
Route::post('/stusettingstore', 'AllstudentController@update_stusettings');
