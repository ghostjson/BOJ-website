<?php

namespace App\Http\Controllers;

use App\Iplists;
use Illuminate\Http\Request;

use App\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class UserAuthentication extends Controller
{
    public function registerView(Request $request)
    {
        $ip = $request->ip();

        if ($query = DB::table('iplists')->where('ip_address', $ip)->exists()) {
            return view('register', ['not' => 'Only one account is allowed in this device']);
        }

        return view('register');
    }

    public function getIp()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
    }

    public function store(Request $request)
    {
        try{
            $user = new User();
            $user->username = $request->input('username');
            $user->password = Hash::make($request->input('password'));
            $user->email = $request->input('email');
            $user->secret = Hash::make($request->input('secret'));
            $user->wallet = 0;
            $user->profile_image = 0;
            $user->save();

            $ip = $request->ip();

            $iplists = new Iplists;
            $iplists->ip_address = $ip;
            $iplists->save();

            Auth::login($user);
            
            return redirect('/');
        }

        catch(Exception $e){
            return redirect('/register')->with('error', 'Your account already exist, please login');
        }
    }

    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            return View::make('login', ['error' => 'Username or password is incorrect']);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    public function getUser()
    {
        return auth()->user();
    }

    public function forgot(Request $request)
    {

        $secret = $request->input('secret');
        $new_pass = Hash::make($request->input('new_password'));
        $secret1 = Hash::make($request->input('secret'));

        $user = User::all();

        foreach ($user as $u) {
            if (Hash::check($secret, $u->secret)) {
                $u->password = $new_pass;
                $u->save();
                return redirect('/login');
            }
        }

        return 'Secret Not Found';
    }
}
