<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $isOnline = Setting::first()->is_online;
    //$settings = Setting::first();
    //$isOnline = $settings->is_online;
    //$isOnline = env('IS_ONLINE');
    // Check if the env is_online value is true
    // TRUE - redirect to welcome
    if($isOnline) {
        return view('template::cool_templates.index');
        //return view('welcome');
    }
    // FALSE - redirect to login
    else {
        return view('custom.login');
    }

    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('custom.login');

Route::name('admin.')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('users', [UserController::class, 'index'])->name('users');
});