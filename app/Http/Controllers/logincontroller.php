<?php

namespace App\Http\Controllers\Auth; // Add a semicolon at the end

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            // User is authenticated, redirect to dashboard
            return redirect()->route('dashboard');
        } else {
            // Authentication failed, redirect back to login page
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
}