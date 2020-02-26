<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EEEController extends Controller
{
    public function eee()
    {
    	$eeestudents_info=DB::table('students_tbl')->where(['department'=>2])->get();
    	$manage_student=view('admin/eee')->with('eee_student_info',$eeestudents_info);
    	return view('layout')->with('eee',$manage_student);
    	//return view('admin/eee');
    }
}
