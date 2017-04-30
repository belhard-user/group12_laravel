<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $names = [
            'Neo',
            'Morpheus',
            'Tank',
            'Trinity',
            'Dozer',
            'Smith'
        ];


        return view('index', compact('names'));
    }

    public function hello($name, $lname)
    {
        return view('hello', compact('name', 'lname'));
    }
}
