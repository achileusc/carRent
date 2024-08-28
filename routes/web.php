<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

Route::get('/' ,[HomeController::class,'index'])->name('home')->middleware('auth');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('register', function () {
    return view('register.index');
});
Route::post('register',[registerController::class,'store'])->name('register.store');

Route::get('login', [LoginController::class,'index'])->name('login');
Route::post('login', [LoginController::class,'cek'])->name('login.cek');
Route::get('login/keluar', [LoginController::class,'keluar'])->name('login.keluar');

Route::get('car', function(){
    return view('car.index');
})->name('car')->middleware('auth');