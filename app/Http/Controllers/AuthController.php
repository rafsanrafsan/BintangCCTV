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
        return view('auth.signin');
    }

    public function signin(Request $request)
    {

        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
        ];
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required'
         ]);

        if(Auth::attempt(['username'=>$request->username, 'password'=>$request->password])){
            return redirect()->route('item.list');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
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

            return redirect('/signin');
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
