<?php

namespace App\Http\Controllers;

use App\Ads;
use App\App;
use App\Video;
use App\Withdrawal;
use Illuminate\Http\Request;

use App\Url;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check.admin');
    }

    public function index(){
        return view('admin.index');
    }

    public function video(){
        $videos = Video::all();
        return view('admin.video', ['videos'=>$videos]);
    }

    public function website(){
        $urls = Url::all();
        return view('admin.website', ['url'=>$urls]);
    }

    public function addWebsite(Request $request){
        $url_value = $request->input('url');
        $reward = $request->input('reward');

        $url = new Url;

        $url->urls = $url_value;
        $url->reward = $reward;

        $url->save();

        return redirect('admin/website');
    }

    public function editUrlView($id){
        $url = Url::find($id);
        return view('admin.edit_url', ['url'=>$url, 'id'=>$id]);
    }

    public function editUrl(Request $request,$id){
        $url = Url::find($id);
        $url->urls = $request->input('url');
        $url->reward = $request->input('reward');
        $url->save();
        return redirect('/admin/website');
    }

    public function deleteUrl(Request $request, $id){
        $url = Url::find($id);
        $url->delete();
        return redirect('/admin/website');
    }


    public function addVideo(Request $request){
        $path = $request->file('video')->store('public/videos');
        $url = Storage::url($path);
        $urlModal = new Video;
        $urlModal->path = $url;
        $urlModal->reward = $request->input('reward');
        $urlModal->save();
        return redirect('/admin/video');
    }


    public function deleteVideo(Request $request, $id){
        $video = Video::find($id);
        $path = $video->path;
        $video->delete();

        Storage::delete($path);

        return redirect('/admin/video');
    }

    public function adsView(){
        return view('admin.ads');
    }

    public function updateVideoAd(Request $request){
        $video = Ads::find(2);
        $path = $request->file('video')->store('public/videos');
        $url = Storage::url($path);
        $video->path = $url;
        $video->save();

        return redirect('/admin/ads');
    }

    public function updateBannerAd(Request $request){
        $video = Ads::find(3);
        $path = $request->file('image')->store('public/images');
        $url = Storage::url($path);
        $video->path = $url;
        $video->save();

        return redirect('/admin/ads');
    }

    public function appView(){
        $apps = App::all();
        return view('admin.apps', ['apps'=>$apps]);
    }

    public function addApp(Request $request){
        $url_value = $request->input('url');
        $reward = $request->input('reward');

        $app = new App;

        $app->url = $url_value;
        $app->reward = $reward;

        $app->save();

        return redirect('admin/app');
    }

    public function editAppView($id){
        $url = App::find($id);
        return view('admin.edit_app', ['app'=>$url, 'id'=>$id]);
    }

    public function editApp(Request $request, $id){
        $app = App::find($id);
        $app->url = $request->input('url');
        $app->reward = $request->input('reward');
        $app->save();
        return redirect('/admin/app');
    }

    public function deleteApp(Request $request, $id){
        $app = App::find($id);
        $app->delete();
        return redirect('/admin/app');
    }

    public function withdraw(){
        $with = Withdrawal::all();
        return view('/admin/withdraw', ['with'=>$with]);
    }

    public function withdrawDone($id){
        $with = Withdrawal::find($id);
        $with->status = 'complete';
        $with->save();

        return redirect('/admin/withdraws');
    }

    public function verifyReset(){
        DB::table('users')->update(array('verify' => 'no'));

        return redirect('/admin');
    }
}
