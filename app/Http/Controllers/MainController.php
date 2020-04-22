<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function videos(){
        return view('videos');
    }

    public function withdraw(){
        return view('withdraw');
    }
}
