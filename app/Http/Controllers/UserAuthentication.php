<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class UserAuthentication extends Controller
{
    public function registerView(Request $request){
        return view('register');
    }

    public function store(Request $request){
        $user = new User();
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->email = $request->input('email');
        $user->secret = $request->input('secret');
        $user->wallet = 0;
        $user->save();

        Auth::login($user);
    }

    public function loginView(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('/test/user');
        }else{
            return View::make('login', ['error'=> 'Username or password is incorrect']);
        }
    }

    public function logout(){
        Auth::logout();

        return redirect('/login');
    }

    public function getUser(){
        return auth()->user();
    }
}
