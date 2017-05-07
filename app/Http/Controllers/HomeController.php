<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = [
            ['name' => 'Neo', 'age' => 23],
            ['name' => 'Morpheus', 'age' => 26],
            ['name' => 'Trinity', 'age' => 33],
        ];
        
        return view('home.home', compact('users'));
    }

    public function profile($name, $age)
    {
        return view('home.profile', compact('name', 'age'));
    }
}
