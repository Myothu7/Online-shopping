<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function view(){
        return view('login');
    }

    public function login_check(){
        if(request()->email == "admin@gmail.com" && request()->password == "admin"){
            return redirect('/items');
        }
        else{
            return redirect('login')->with('fail','email or password is invalid');
        }
    }
}
