<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    public function login(Request $request) {

        $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('welcome');
        }

        return back()->withErrors([
            'email' => 'The provided credentials are incorrect.',
        ]);

        return ;
    }


    public function registerUser(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required | string | email | max:255 | unique:users',
            'password' => 'required | string | min:6 | confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successfully. Please login.');
    }
}
