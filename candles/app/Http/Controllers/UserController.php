<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show_login() {
        return view('login');
    }

    public function show_reg() {
        return view('registration');
    }
}
