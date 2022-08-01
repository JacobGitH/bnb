<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:5',
        ]);

        $form['password'] = bcrypt($form['password']);
        $form['user_type'] = '0';

        $user = User::create($form);
        auth()->login($user);
        return redirect('/')->with('message', 'you are loged');
    }

    public function authenticate(Request $request){
        $form = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]); 

        if(auth()->attempt($form)){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'you are loged in');
        }

        return back()->withErrrors(['email' => 'invalid'])->onlyInput('email');

    }

    public function logout(Request $request){
        //removes authentification from session
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }

}
