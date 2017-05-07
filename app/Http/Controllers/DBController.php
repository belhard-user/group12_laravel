<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DBController extends Controller
{
    public function insert()
    {
        $time = new \DateTime();
        DB::table('peoples')->insert([
            ['name' => 'Tank', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Trinity', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Morheus', 'created_at' => $time, 'updated_at' => $time],
        ]);

        return view('db.insert');
    }
}
