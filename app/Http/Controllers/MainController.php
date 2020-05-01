<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $track = auth()->user()->video_track;
        $adv = DB::table('ads')->where('type','video')->first();
        if($video = DB::table('videos')->where('id', '>', $track)->first()){
            return view('videos', ['path'=>$video->path, 'id'=>$video->id, 'ad_path'=>$adv->path]);
        }else{
            return view('videos', ['path'=>'', 'id'=>'']);
        }
    }

    public function website(){
        $track = auth()->user()->website_track;
        $adv = DB::table('ads')->where('type','banner')->first();

        if($url = DB::table('urls')->where('id', '>', $track)->first()){
            return view('website', ['path'=>$url->urls, 'id'=>$url->id, 'ad_path'=>$adv->path]);
        }else{
            return view('website', ['path'=>'', 'id'=>'','ad_path'=>$adv->path]);
        }
    }

    public function withdraw(){
        return view('withdraw');
    }

    public function videoComplete($id){
        $user = auth()->user();
        $user->video_track = $id;
        $user->wallet += 1.5;
        $user->save();

        return response()->json(['success'=>'success'], 200);
    }

    public function webComplete($id){
        $user = auth()->user();
        $user->website_track = $id;
        $user->wallet += 2;
        $user->save();

        return response()->json(['success'=>'success'], 200);
    }

    public function app(){
        $track = auth()->user()->app_track;
        $adv = DB::table('ads')->where('type','banner')->first();

        if($app = DB::table('apps')->where('id', '>', $track)->first()){
            return view('app', ['path'=>$app->url, 'id'=>$app->id, 'ad_path'=>$adv->path]);
        }else{
            return view('app', ['path'=>'', 'id'=>'','ad_path'=>$adv->path]);
        }
    }
}


