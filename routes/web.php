<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

// Pages Routes
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


// Auth
Route::post('/logout', function () {
    Auth::logout();
    return redirect('login');
});

// USER DASHBOARD
Route::middleware(['auth'])->group(function () {
    Route::get('/verify', function () {
        return view('auth.verify');
    });
    Route::get('/identity_verification', function () {
        return view('auth.identity_verification');
    });

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });

    Route::get('/dashboard/request', function () {
        return view('dashboard.request-new');
    });

    Route::get('/dashboard/notification', function () {
        return view('dashboard.notification');
    });

    Route::get('/dashboard/settings', function () {
        return view('dashboard.settings');
    });
});
Route::get('/dashboard/wallet', function () {
    return view('dashboard.wallet');
});
