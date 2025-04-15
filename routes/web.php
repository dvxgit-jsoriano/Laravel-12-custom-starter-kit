<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingController;
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
})->name('root');

Route::get('/login', [LoginController::class, 'index'])->name('custom.login');

Route::name('admin.')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('save-setting', [SettingController::class, 'save'])->name('save-setting');

    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::get('users-add', [UserController::class, 'create'])->name('users-add');
    Route::post('users-store', [UserController::class, 'store'])->name('users-store');
    Route::get('users-edit/{user}',[UserController::class, 'edit'])->name('users-edit');
    Route::post('users-update/{user}',[UserController::class, 'update'])->name('users-update');
    Route::delete('users-destroy/{user}', [UserController::class, 'destroy'])->name('users-destroy');
});