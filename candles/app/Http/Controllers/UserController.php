<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\CartController;
use App\Models\User;

class UserController extends Controller
{
    public function show_login() {
        if (Auth::check()) {
            $user = auth()->user();
            // user is logged in, return the logged-in view
            return view('profile', ['user' => $user]);
        } else {
            // user is not logged in, return the login view
            return view('login');
        }
    }

    public function showRegistration() {
        return view('registration');
    }

    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
    
        $user = User::where('email', $email)->first();
    
        if (!$user) {
            // user not found with this email
            return redirect()->back()->withErrors(['email' => 'Invalid Email']);
        }
    
        if (Hash::check($password, $user->password)) {
            // password matches, log in the user
            Auth::login($user);
            $cartController = new CartController();
            $cartController->syncCart();
            return redirect('/');
        }
    
        // password doesn't match
        return redirect()->back()->withErrors(['email' => 'Invalid password']);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register(Request $request) {
        $email = $request->input('email');
        $existingUser = User::where('email', $email)->first();
        if ($existingUser) {
            // email already exists, return error response or redirect back with error message
            return redirect()->back()->withErrors(['email' => 'Email already exists']);
        }

        $password = $request->input('password');
        $passwordConfirmation = $request->input('repeat_password');
    
        if ($password !== $passwordConfirmation) {
            // password and password confirmation do not match, return error response or redirect back with error message
            return redirect()->back()->withErrors(['repeat_password' => 'Password and password confirmation do not match']);
        }
    

        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $email;
        $user->password = Hash::make($request->input('password'));
        $user->phone_number = '555-555';
        $user->isAdmin = false;
        $user->registered_at = now();
        $user->save();

        Auth::login($user);
        return redirect('/');
    }
}
