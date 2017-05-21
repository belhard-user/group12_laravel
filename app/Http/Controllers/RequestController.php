<?php

namespace App\Http\Controllers;

use App\People;
use Faker\Provider\zh_TW\DateTime;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        $people = People::latest()->get();
        
        return view('request.index', compact('people'));
    }

    public function store(Request $request)
    {
        $p = People::firstOrNew($request->except('_token'));
        
        // ...
        $p->save();

        return redirect()->back();
    }
}
