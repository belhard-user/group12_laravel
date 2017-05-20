<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest;
use Validator;

class ValidateController extends Controller
{
    public function index()
    {
        /*$validator = Validator::make(['name' => 'Neo', 'age' => 17, 'age_confirmation' => 17, 'nick' => 'neo'], [
            'name' => 'required|min:3|different:nick',
            'age' => 'required|integer|between:18,65|confirmed'
        ]);

        dump($validator->errors()->all());
        dump($validator->passes());
        die;*/
        return view('validator.index');
    }

    public function validation(FormRequest $request)
    {
        dd($request->all());
    }
}
