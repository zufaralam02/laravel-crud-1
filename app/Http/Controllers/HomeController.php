<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    // public function number($id)
    // {
    //     return 'The number is : ' . $id;
    // }

    public function index()
    {
        $data = [
            'name' => 'Fulan',
            'address' => 'Tangerang'
        ];

        return view('v_home', $data);
    }
}
