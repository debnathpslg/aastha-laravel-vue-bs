<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //
    public function showLoginPage()
    {
        //
        return Inertia::render('Auth/Login');
    }

    public function validateLogin(Request $request)
    {
        //
        if (!Auth::attempt($request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]), true)) {
            throw ValidationException::withMessages([
                'email' => 'Authentication failed'
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended();
    }

    public function logoutUser(Request $request)
    {
        //
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
