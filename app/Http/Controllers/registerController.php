<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class registerController extends Controller{

    public function index():View {return view('register');}
    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'notelp'=>'required|numeric',
            'alamat'=> 'required',
            'nosim'=> 'required|numeric',
            'password'=> 'required',
        ], [
            'fullname.required'=> 'Nama Lengkap harus diisi',
            'email.required'=> 'Email harus diisi',
            'notelp.required'=> 'Nomor Telepon harus diisi',
            'alamat.required'=> 'Alamat harus diisi',
            'nosim.required'=> 'No SIM harus diisi',
            'Password.required'=> 'Password harus diisi',
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'notelp'=> $request->notelp,
            'alamat'=> $request->alamat,
            'nosim'=> $request->nosim,
            'password'=> Hash::make($request->password),
        ]);
        session()->flash('success','Akun anda telah didaftarkan!');
        return redirect()->route('login');
}}
