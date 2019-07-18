<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function register(){
        return view('admin.register');
    }

    public function login(){
        return view('admin.login');
    }

    public function postRegister(){
        $user = User::create([
            'name'=>request()->name,
            'email'=>request()->email,
            'password'=>bcrypt(request()->password),
        ]);

        if ($user) {
            return redirect('/login')->with('success', 'Registered successfully. please login..!');
        }else {
            return redirect('/register')->with('error', 'Something went wrong. User Registration failed.');
        }
    }

    public function postLogin(){
        $email = request()->email;
        $password = request()->password;

        if (Auth::attempt(['email'=>$email, 'password'=>$password])) {
            return redirect('/dashboard');
        }else {
            return redirect('/login')->with('error', 'Invalid email or password!');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect('/login')->with('success', 'Logout successfully!');
    }
}
