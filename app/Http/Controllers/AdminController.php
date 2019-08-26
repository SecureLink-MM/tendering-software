<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\Tender;
use App\Department;
use App\AwardTender;

class AdminController extends Controller
{
    public function login(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'is_admin' => '1'])) {
                return redirect('/admin/dashboard');
        	  }else{
                return redirect('/admin')->with('error','Invalid Username or Password');
        	}
        }
        return view('admin.admin_login');
    }

    public function dashboard(){
        $tenderCount = Tender::get()->count();
        $departmentCount = Department::get()->count();
        $awardtenderCount = AwardTender::get()->count();

        $tenders = Tender::take(5)->get();
        $departments = Department::take(5)->get();
        $awardtenders = AwardTender::take(5)->get();

        $user = Auth::user();

        return view('admin.dashboard')->with(compact('tenderCount', 'departmentCount', 'awardtenderCount', 'tenders', 'departments', 'awardtenders', 'user'));
    }

    public function logout(){
      Session::flush();
      return redirect('/admin')->with('success', 'Logged out successfully.');
    }
}
