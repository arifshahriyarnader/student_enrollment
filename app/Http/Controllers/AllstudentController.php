<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;

class AllstudentController extends Controller
{
	//all student
    public function allstudent()
    {
    	$allstudent=DB::table('students_tbl')->get();
    	return view('admin/allstudent', compact('allstudent'));
    }
    //view student
    public function View($id)
    {
    	$viewstudent=DB::table('students_tbl')->where('id', $id)->first();
    	return view('admin/viewstudent')->with('view',$viewstudent);
    	//return view('admin/viewstudent');

    }
    //edit student
    public function Edit($id){
    	$edit=DB::table('students_tbl')->where('id', $id)->first();
    	return view('admin/editstudent', compact('edit'));
    }
    //update student
    public function Update(Request $request,$id)
    {
    	$data=array();
    	$data['student_name']=$request->student_name;
    	$data['roll_number']=$request->roll_number;
    	$data['fathers_name']=$request->fathers_name;
    	$data['mothers_name']=$request->mothers_name;
    	$data['department']=$request->department;
    	$data['academic_year']=$request->academic_year;
    	$data['email']=$request->email;
    	$data['student_password']=md5('$request->student_password');
    	$data['phone']=$request->phone;
    	$data['address']=$request->address;
    	$image=$request->file('image');

    	if($image){
    		$image_name=hexdec(uniqid());
   		$ext=strtolower($image->getClientOriginalExtension());
   		$image_full_name=$image_name.'.'.$ext;
   		$upload_path='public/images/';
   		$image_url=$upload_path.$image_full_name;
   		$success=$image->move($upload_path,$image_full_name);
   		$data['image']=$image_url;
   		//unlink($request->old_photo);
   		DB::table('students_tbl')->where('id', $id)->update($data);
   		$notification=array(
    			'message'=>'Post Inserted Successfully',
    			'alert-type'=>'success'

    		);
    		//return Redirect()->route('admin/allstudent')->with($notification);
   		//return Redirect()->back()->with($notification);
   		return Redirect::to('/allstudent');
    	}
    	else{
    		$notification=array(
    	 		'message'=>'Something went wrong',
    	 		'alert-type'=>'error'
    	 	);
    	 	//return Redirect()->route('admin/allstudent')->with($notification);
    	 	//return Redirect()->back()->with($notification);
    	 	return Redirect::to('/allstudent');
    	}


    }

    //delete student
    public function Delete($id)
    {
    	$delete=DB::table('students_tbl')->where('id',$id)->delete();
    	 if($delete){
    	 	$notification=array(
    	 		'message'=>'Data Delete Successfully',
    	 		'alert-type'=>'success'
    	 	);
    	 	return Redirect()->back()->with($notification);

    	 }
    	 else{
    	 	$notification=array(
    	 		'message'=>'Something went wrong',
    	 		'alert-type'=>'error'
    	 	);
    	 	return Redirect()->back()->with($notification);
    	 }

    }


//student profile
    public function studentprofile()
    {
        $student_id=Session::get('id');
         
        $student_profile=DB::table('students_tbl')
        ->select('*')
        ->where('id',$student_id)
        ->first(); 
        
        $manage_student=view('student/studentprofile')->with('student_profile',$student_profile);
        return view('studentlayout')->with('studentprofile',$manage_student);
    }

    //student settings
    public function studentsettings()

    {
        $id=Session::get('id');
        $settings=DB::table('students_tbl')->where('id', $id)->first();
        return view('student/student_settings', compact('settings'));
        //return view('student/student_settings');
    }

    

}
