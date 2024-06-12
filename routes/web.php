<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('blank', 'blank')->name('home');
Route::view('login', 'login')->name('login');
Route::view('register', 'register')->name('register');
