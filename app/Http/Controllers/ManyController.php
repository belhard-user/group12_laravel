<?php

namespace App\Http\Controllers;

use App\Student;
use App\Teacher;
use Illuminate\Http\Request;

class ManyController extends Controller
{
    public function index()
    {
        $dmitry = Student::find(4);

        $dmitry->teachers()->attach([4], [
            'note' => 'она не красивая'
        ]);
        /*$t = Teacher::find(2);

        $students = \App\Student::pluck('id')->toArray();

        $t->students()->attach([1]);*/

        return view('layouts.app');
    }

    public function show()
    {
        $teachersList = Teacher::with('students')->get();
        return view('many.show', compact('teachersList'));
    }

    private function createUsers()
    {
        \DB::table('teachers')->insert([
            ['name' => 'Юра'],
            ['name' => 'Саша'],
            ['name' => 'Миша'],
            ['name' => 'Юля'],
        ]);

        \DB::table('students')->insert([
            ['name' => 'Виктор Иванович'],
            ['name' => 'Сергей Викторович'],
            ['name' => 'Дмитрий Владимирович'],
            ['name' => 'Сергей Николаевич'],
        ]);
    }
}
