<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials, $request->boolean('remember'))){
            // Regenerate session for security
            $request->session()->regenerate();

            // Redirect user
            return redirect()->route('index')->with('success', 'Welcome to Babybit!');
        }
        return back()->withErrors(['email' => 'These credentials do not match our records.'])->onlyInput('email');
    }
}
