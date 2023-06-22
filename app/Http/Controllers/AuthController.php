<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', [
            'title' => 'login'
        ]);
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->put('user_id', Auth::user()->id);
            return view('web.index', [
                'title' => '/'
            ]);
        } else {
            return view('auth.login', [
                'title' => '/',
                'error_message' => 'Wrong Email or Password'
            ]);
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/');
    }

    public function register_form()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role_id' => 2,
        ]);

        $request->session()->put('user_id', $user->id);

        Auth::login($user);

        return redirect('/');
    }
}

