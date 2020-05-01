<?php

namespace App\Http\Controllers;

use App\Ads;
use App\Video;
use Illuminate\Http\Request;

use App\Url;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
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
}
