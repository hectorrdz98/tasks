<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function home()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

        return back()->withInput()->with('error', 'Invalid credentials');
    }

    public function register(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user)
            return back()->withInput()->with('error', 'Already registered');

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Bcrypt($request->password)
        ]);
        Auth::login($user, true);
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
