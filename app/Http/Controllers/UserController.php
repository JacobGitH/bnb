<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //shows register form
    //authentigfication 
    public function register(){
        return view('users.register');
    }

    //shows login form
    public function login(){
        return view('users.login');
    }

    public function store(Request $request){
        $form = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
    }


}
