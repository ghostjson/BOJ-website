<?php

namespace App\Http\Controllers;

use App\Video;
use App\Url;
use App\Withdrawal;
use App\App;
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

        $username = auth()->user()->username;

        $with = Withdrawal::where('name', $username)->latest()->get();

        return view('processing', ['withdrawals'=>$with]);
    }

    public function verify(){
        return view('verify');
    }

    public function verifyComplete(){
        $user = auth()->user();
        $user->verify = 'yes';
        $user->save();

        return response('success', 200);
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
            return view('videos', ['path'=>'', 'id'=>'','ad_path'=>'']);
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

    public function withdrawSubmit(Request $request){

        $with = new Withdrawal;
        $with->name = $request->input('username');
        $with->target = $request->input('target');
        $with->amount = $request->input('amount');
        $with->type = $request->input('type');

        $user = \auth()->user();
        $user->wallet -= $with->amount;
        $user->save();
        $with->save();

        return redirect('/processing');
    }

    public function videoComplete($id){
        $video = Video::find($id);
        $user = auth()->user();
        $user->video_track = $id;
        $user->wallet += $video->reward;
        $user->save();

        return response()->json(['success'=>'success'], 200);
    }

    public function webComplete($id){
        $url = Url::find($id);
        $user = auth()->user();
        $user->website_track = $id;
        $user->wallet += $url->reward;
        $user->save();

        return response()->json(['success'=>'success'], 200);
    }

    
    public function appComplete($id){
        $app = App::find($id);
        $user = auth()->user();
        $user->app_track = $id;
        $user->wallet += $app->reward;
        $user->save();

        return response()->json(['success'=>'success'], 200);
    }

    public function app(){
        $track = auth()->user()->app_track;
        $adv = DB::table('ads')->where('type','banner')->first();

        if($app = DB::table('apps')->where('id', '>', $track)->get()){
            return view('app', ['app'=>$app, 'ad_path'=>$adv->path]);
        }else{
            return view('app', ['path'=>'', 'ad_path'=>$adv->path]);
        }
    }
}


