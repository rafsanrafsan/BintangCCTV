<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \App\Models\User;
class AuthController extends Controller
{
    public function renderin()
    {
        return view('auth.signin');
    }

    public function signin(Request $request)
    {
        if(Auth::attempt(['username'=>$request->username, 'password'=>$request->password])){
            return redirect()->route('item.list');
        } else {
            dd('salah');
        }
    }

    public function renderup()
    {
        return view('auth.signup');
    }

    public function signup(Request $request)
    {   
        //d($request);
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $simpan = $user->save();
 
        if($simpan){

            return redirect('/sigin');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect('/signup');
        }
    }
}
