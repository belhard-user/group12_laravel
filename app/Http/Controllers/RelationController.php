<?php

namespace App\Http\Controllers;

use App\People;
use App\Phone;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function index()
    {
        /*$people = People::with('phone', 'article')->get();

        // $people->phone;

        foreach($people as $p){
            echo $p->name . ' ' . $p->article->title . "({$p->phone->count()})<br>";
            foreach ($p->phone as $phone){
                echo "<li>".$phone->phone."</li>";
            }
        }*/

        $phone = Phone::first();

        echo $phone->people;
        
        /*$people->phone()->create([
            'phone' => '4564555'
        ]);*/
        return view('layouts.app');
    }

    public function user()
    {
        // \Auth::loginUsingId(18);
        // dd(\Auth::user()->email);
        return view('layouts.app');
    }
}
