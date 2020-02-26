<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class AddstudentController extends Controller
{
    public function addstudent()
    {
    	return view('admin/addstudent');
    }

    public function storestudent(Request $request)
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
   		DB::table('students_tbl')->insert($data);
   		
   		$notification=array(
    			'message'=>'Post Inserted Successfully',
    			'alert-type'=>'success'

    		);
    		
    		return Redirect()->back()->with($notification);
    		//return redirect()->back('admin/addstudent');

    	}
    	else{
    		DB::table('students_tbl')->insert($data);
    		//return redirect()->back('admin/addstudent');
   		 $notification=array(
    			'message'=>'Post Inserted Successfully',
    			'alert-type'=>'success'

    		); 
    		return Redirect()->back()->with($notification);
    	}



    }
}
