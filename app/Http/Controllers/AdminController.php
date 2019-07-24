<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;

class AdminController extends Controller
{
    public function login(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'admin' => '1'])) {
                return redirect('/admin/dashboard');
        	  }else{
                return redirect('/admin')->with('error','Invalid Username or Password');
        	}
        }
        return view('admin.admin_login');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function logout(){
      Session::flush();
      return redirect('/admin')->with('success', 'Logged out successfully.');
    }
}
