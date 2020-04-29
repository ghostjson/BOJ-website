<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Url;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function video(){
        return view('admin.video');
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
}
