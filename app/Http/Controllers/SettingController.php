<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function save(Request $request)
    {
        $validated = $request->validate([
            'is_online' => 'required',
        ]);

        $setting = Setting::first();
        $setting->is_online = $validated['is_online'];
        $setting->save();

        return response()->json([
            'success' => true,
            'message' => 'Setting updated successfully.',
            'data' => $setting
        ]);
    }
}
