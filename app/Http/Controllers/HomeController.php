<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(\Car $car)
    {
        // dump($car); die;
    }
    public function index()
    {
        $users = [
            ['name' => 'Neo', 'age' => 23],
            ['name' => 'Morpheus', 'age' => 26],
            ['name' => 'Trinity', 'age' => 33],
        ];
        
        return view('home.home', compact('users'));
    }

    public function someMethod()
    {
        $o1 = app('car');
        $o2 = app('car');
        $o3 = app(\Car::class);

        dump($o1, $o2, $o3);

        echo \Carsus::foo();
    }

    public function profile($name, $age)
    {
        return view('home.profile', compact('name', 'age'));
    }
}
