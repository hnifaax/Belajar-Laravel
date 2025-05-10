<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login() {
        return view('login');
    }
    
    public function authenticating(Request $request) {
        Session::flash('email', $request->email);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'Login Failed, Email or Password incorrect. Please try again!');
        return redirect('/login');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function signup() {
        return view('/signup');
    }
    public function create(Request $request) {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $info = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ], [
            'name.required' => 'Name is reuired',
            'email.required' => 'Email is required',
            'email.unique' => 'This Email is already taken',
            'password.required' => 'Password is required',
            'password.min' => 'Minimum Character Password : 8'
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $info = [
            'email' =>$request->email,
            'password' =>$request->password
        ];
        if (Auth::attempt($info)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        } else{
        Session::flash('status', 'failed');
        Session::flash('message', 'Sign Up Failed, Email or Password incorrect. Please try again!');
        return redirect('/signup');
        }
    }


}
