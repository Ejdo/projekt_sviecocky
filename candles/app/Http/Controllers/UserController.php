<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    public function show_login() {
        return view('login');
    }

    public function showRegistration() {
        return view('registration');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function register(Request $request) {
        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->phone_number = '555-555';
        $user->isAdmin = false;
        $user->registered_at = now();
        $user->save();

        Auth::login($user);
        dd($user);
        return redirect('/');
    }
}
