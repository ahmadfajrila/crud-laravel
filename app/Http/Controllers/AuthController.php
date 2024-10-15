<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function tampilregistrasi(){
        return view('registrasi');
    }

    function submitregistrasi(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        // dd($user);
        return redirect()->route('login.tampil');
    }

    function tampillogin(){
        return view('login');
    }

    function submitlogin(Request $request){
        $data = $request->only('email', 'password');

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('siswa.tampil');
        }else{
            return redirect()->back()->with('gagal', 'Please check your email or password');
        }
    }

    function logout(){
        Auth::logout();
        return redirect()->route('login.tampil');
    }
}
