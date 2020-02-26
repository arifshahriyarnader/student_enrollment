<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class TeacherController extends Controller
{	//add teacher

    public function addteacher()
    {
    	return view('admin/addteacher');
    }

    public function storeteacher(Request $request){
    	$data=array();
    	$data['teacher_name']=$request->teacher_name;
    	$data['department']=$request->department;
    	$data['blood_group']=$request->blood_group;
    	$data['address']=$request->address;
    	$image=$request->file('image');

    	if($image){
    		$image_name=hexdec(uniqid());
   			$ext=strtolower($image->getClientOriginalExtension());
   			$image_full_name=$image_name.'.'.$ext;
   			$upload_path='public/teacher images/';
   			$image_url=$upload_path.$image_full_name;
   			$success=$image->move($upload_path,$image_full_name);
   			$data['image']=$image_url;

   			DB::table('teachers')->insert($data);

   			$notification= array(
   				'message'=>'Data Inserted Successfully',
   				'alert-type'=>'Success'
   			);

   			return Redirect()->back()->with($notification);
			}
			else{
				DB::table('teachers')->insert($data);

				$notification= array(
   				'message'=>'Something Went Wrong',
   				'alert-type'=>'Success'
   			);

   			return Redirect()->back()->with($notification);

			}
    }
	
	 //all teacher show
    public function allteacher()
    {
    	$allteacher=DB::table('teachers')->get();
    	return view('admin/allteacher', compact('allteacher'));
    }
    
    //view teacher
    public function viewteacher($id)
    {
    	$viewteacher=DB::table('teachers')->where('id',$id)->first();
    	return view('admin/viewteacher')->with('view',$viewteacher);
    }
     public function editteacher($id)
    {
    	$edit=DB::table('teachers')->where('id',$id)->first();
    	return view('admin/editteacher',compact('edit'));
    }

    public function updateteacher(Request $request,$id)
    {
    	$data=array();
    	$data['teacher_name']=$request->teacher_name;
    	$data['department']=$request->department;
    	$data['blood_group']=$request->blood_group;
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

   		DB::table('teachers')->where('id',$id)->update($data);

   		$notification=array(
   			'message'=>'Data Updated',
   			'alert-type'=>'success'
   		);
   		//return Redirect()->route('admin/allteacher')->with($notification);
   			return Redirect::to('/allteacher');

    	}

    	else{
    		$data['image']=$request->old_photo;
    		DB::table('teachers')->where('id',$id)->update($data);
    		$notification=array(
   			'message'=>'Something went wrong',
   			'alert-type'=>'success'
   		);
    	//return Redirect()->route('admin/allteacher')->with($notification);
    			return Redirect::to('/allteacher');
    	}
    }

    public function deleteteacher($id)
    {
    	$delete=DB::table('teachers')->where('id',$id)->delete();
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

}
