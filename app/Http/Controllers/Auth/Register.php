<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


// Dit is een invokable controller en die heeft meestal maar 1 method en functie, i.t.t. een resource controller die meerdere methods heeft.
// Een Invokable controller per Register en Login auth is één van de opties. Vaak wordt gekozen voor ééh grote auth (resource) controller
// De invoke functie is dus ook typisch aan dit type controller en gebruik je voor hetgeen je deze controller nodig hebt.
class Register extends Controller
{

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // validate the $request input
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:99'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'], // je kan nog confirmed toevoegen als een password geconfirmd moet worden
            'baby_name' => ['required', 'string', 'max:50'],
            'birthday' => ['required', 'date'],
        ]);

        // create new user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'baby_name' => $validated['baby_name'],
            'birthday' => $validated['birthday'],
        ]);

        // Login new user
        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->route('index')->with('success', 'Welcome to Babybit!');


    }
}
