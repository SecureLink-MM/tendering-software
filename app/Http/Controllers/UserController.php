<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit($id){
        $user = Auth::user();
        return view('admin.user.edit')->with(compact('user'));
    }
}
