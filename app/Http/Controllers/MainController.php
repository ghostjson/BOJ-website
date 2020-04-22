<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function account(){
        return view('account');
    }

    public function contact(){
        return view('contact');
    }

    public function home(){
        return view('home');
    }

    public function processing(){
        return view('processing');
    }

    public function profile(){
        return view('profile');
    }

    public function profileUpdate(Request $request){
        $user = Auth::user();

        if($request->input('password') == $request->input('confirm_password')){
            $user->username = $request->input('username');
            $user->password = $request->input('password');
            $user->profile_image = $request->input('pro_image');
            $user->email = $request->input('email');

            $user->save();

            return redirect('/profile');
        }else{
            return redirect('/profile?error=Password is not matching');
        }

    }

    public function videos(){
        return view('videos');
    }

    public function withdraw(){
        return view('withdraw');
    }
}
