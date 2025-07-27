<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
{
    return view('user.dashboard');
}

public function user_testing()
{
    dd('user');
}

}
