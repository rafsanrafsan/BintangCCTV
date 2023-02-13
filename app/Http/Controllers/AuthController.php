<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \App\Models\User;
use Session;
class AuthController extends Controller
{
    public function renderin()
    {
        return view('auth.login');
    }

    public function signin(Request $request)
    {

        $this->validate($request,[
            'username' => 'required',
            'password' => 'required'
         ]);

        if(Auth::attempt(['username'=>$request->username, 'password'=>$request->password])){
            return redirect()->route('item.list');
        } else {
            Session::flash('gagal','Username atau Password Salah!!!');
            return redirect()->route('login');
        }
    }

    public function renderup()
    {
        return view('auth.signup');
    }

    public function signup(Request $request)
    {   

        $this->validate($request,[
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
         ]);
        //d($request);
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $simpan = $user->save();

        $this->validate($request,[
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
         ]);
        if($simpan){

            return redirect('/login');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect('/signup');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
