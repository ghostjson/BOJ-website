<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

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
        $user->secret = Hash::make($request->input('secret'));
        $user->wallet = 0;
        $user->profile_image = 0;
        $user->save();

        Auth::login($user);

        return redirect('/');
    }

    public function loginView(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect('/');
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
    
    public function forgot(Request $request){
        
        $secret = $request->input('secret');
        $new_pass = Hash::make($request->input('new_password'));
        $secret1 = Hash::make($request->input('secret'));
        
        $user = User::all();
        
        foreach($user as $u){
            if(Hash::check($secret, $u->secret)){
                $u->password = $new_pass;
                $u->save();
                return redirect('/login');
            }
        }
        
        return 'Secret Not Found';
    }
}
