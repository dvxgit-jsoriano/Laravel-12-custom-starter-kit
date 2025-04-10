<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $settings = Setting::all();
        return view('dashboard', compact('settings'));
    }
}
