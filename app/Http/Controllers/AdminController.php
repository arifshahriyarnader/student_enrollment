<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();


class AdminController extends Controller
{
	public function admin_dashboard()
	{
		return view('admin/dashboard');

	}

    public function login_dashboard(Request $request)
    {
    	$email=$request->admin_email;
    	$password=md5($request->admin_password);
    	$result=DB::table('admin_tbl')
    	->where('admin_email',$email)
    	->where('admin_password',$password)
    	->first();
    	//return view('admin\dashboard');
    	if($result){
    		Session::put('admin_email',$result->admin_email);
    		Session::put('admin_password',$result->admin_password);
    		return Redirect::to('/admin_dashboard');
    	}
    	else{
    		Session::put('exception','Email or Password Invalid');
    		return Redirect::to('/backend');
    	}
    }
}
