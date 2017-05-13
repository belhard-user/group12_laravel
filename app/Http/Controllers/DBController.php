<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DBController extends Controller
{
    public function insert()
    {
        $time = new \DateTime();
        /*DB::table('peoples')->insert([
            ['name' => 'Tank', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Trinity', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Morheus', 'created_at' => $time, 'updated_at' => $time],
        ]);*/

        return view('db.insert');
    }

    public function select()
    {
        /*$qb = DB::table('peoples')->select('id');

        if(isset($_GET['q'])){
            $qb->addSelect('name');
            $qb->where('name', 'like', '%' . $_GET['q'] . '%');
        }

        $data = $qb->orderBy('name', 'DESC')->get();*/

        /*$data = DB::table('peoples')
            ->select(DB::raw('name, id'))
            ->where(DB::raw("id=1 and name like '%a%'"))
            ->get();*/
        $data = DB::table('peoples')
                ->leftJoin('users', 'peoples.id', '=', 'users.id')
                ->select('peoples.id', 'users.name', 'users.remember_token')
                ->where('peoples.name', '<>', 'Neo')
                ->get()
        ;
        \Debugbar::info($data);

        return view('db.insert');
    }

    public function update()
    {
        DB::table('peoples')
            ->where('id', '2')
            ->update([
            'name' => 'Tank'
            ])
        ;

        return view('db.insert');
    }
}
