<?php

namespace App\Http\Controllers;

// use Illuminate\Container\Attributes\Auth;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function cek(Request $request)
    {
        // dd($request->all());

        // $credential = $request->validate([
        //     'email' =>'required|email:dns',
        //     'password'=> 'required'
        // ]);
        // if(Auth::attempt([$credential])) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('home');
        // }return back()->with('error','login failed');
        // $credential = $request->validate([
        //     'email'=>'requred|email',
        //     'password'=>'required',
        // ], [
        //     'email.required'=> 'Email harus diisi',
        //     'email.email'=>'Format Email Salah!',
        //     'password.required'=> 'Password tidak boleh kosong',
        // ]);
        // if (Auth::attempt($credential)) {
        //     $request->session()->regenerate();
        //     return redirect()->route('home');
        // } return back()->withErrors(['email','Email salah'])->onlyInput('email');
        
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/');
        }return redirect('login');
    }

    public function keluar(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
