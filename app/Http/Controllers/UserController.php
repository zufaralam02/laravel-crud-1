<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function get()
    {
        return view('v_user');
    }
}
