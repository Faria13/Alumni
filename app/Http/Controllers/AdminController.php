<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
session_start();
use Session;
use Auth;

class AdminController extends Controller
{
    public function admin_login(){
    	return view('admin.admin_login');
    }

    public function index(){
    	return view('admin.dashboard');
    }

    public function dashboard(Request $request){

    	$admin_email = $request->admin_email;
    	$admin_password = md5($request->admin_password);
    	$result=DB::table('admins')
    			->where('admin_email', $admin_email)
    			->where('admin_password', $admin_password)
    			->first();
    			
    			if ($result) {
    				Session::put('admin_name', $result->admin_name);
    				Session::put('id', $result->id);
    				return Redirect::to('/dashboard');
    			}
    			else{
    				Session::put('message', 'Invalid Email or Password');
    				return Redirect::to('/admin');
    			}
    }

    public function admin_logout(){
    	Auth::logout();
    	return Redirect::to('/admin');
    }
}
