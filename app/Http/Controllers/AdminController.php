<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $adminEmail = env('ADMIN_EMAIL');
        $adminPasswordHash = env('ADMIN_PASSWORD_HASH');

        if (
            $request->email === $adminEmail &&
            $adminPasswordHash &&
            Hash::check($request->password, $adminPasswordHash)
        ) {
            $request->session()->regenerate();

            $request->session()->put('admin_logged_in', true);

            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid email or password.');
    }
}
