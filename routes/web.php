<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/request', function () {
    return view('request');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

// AUTH
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/verify', function () {
    return view('auth.verify');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/forget-password', function () {
    return view('auth.forget-password');
});
Route::get('/identity_verification', function () {
    return view('auth.identity_verification');
});

// USER DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/request', function () {
    return view('dashboard.request-new');
});
