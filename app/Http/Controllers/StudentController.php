<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();


class StudentController extends Controller
{
	 public function student_dashboard()
    {
    	return view('student/studentdashboard');
    }

    public function studentlogin(Request $request)
	{
		$email=$request->email;
    	$password=$request->student_password;
    	$result=DB::table('students_tbl')
    	->where('email',$email)
    	->where('student_password',$password)
    	->first();


    	
    	 if($result){
    		Session::put('email',$result->email);
    		Session::put('student_password',$result->student_password);
    		return Redirect::to('/student_dashboard');

    	}
    	else{
    		Session::put('exception','Email or Password Invalid');
    		return Redirect::to('/');
    	}   
		

	}

	public function student_logout()
	{
		return Redirect::to('/');
	}
    
}
