<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormContactController extends Controller
{
    public function store(Request $request) {
        // return $request;
        request()->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'subject'=>'required',
            'content'=>['required', 'min:3']
        ],
        [
            "name.required" => __("I need your name")
        ]);

        return 'Datos validados';
    }
}
