<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(10);
        return view('admin.users', compact('users'));
    }

    public function create() {
        return view('admin.users-add');
    }

    public function store(Request $request) {
        // Validate input
        $request->validate([
            'username' => 'required|string|max:255',
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'confirm' => 'required|same:password',
        ]);

        try {
            User::create([
                'username' => $request->username,
                'email' => $request->email,
                'name' => $request->fullname,
                'password' => bcrypt($request->password),
            ]);
            return redirect()->back()->with('success', 'User has been created successfully!');
        } catch(Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function edit(User $user) {
        return view('admin.users-edit', compact('user'));
    }

    public function update(User $user, Request $request) {
        // Validate input
        $request->validate([
            'username' => 'required|string|max:255',
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        try {
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'name' => $request->fullname,
            ]);

            return redirect()->back()->with('success', 'User has been created successfully!');
        } catch(Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function destroy(User $user) {
        try {
            $user->delete();

            return redirect()->back()->with('success', 'User has been deleted successfully!');
        } catch(Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
