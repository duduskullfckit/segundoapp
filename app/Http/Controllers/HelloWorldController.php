<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index(){

        $helloWorld = 'Vadim Blyat';
        return view(
        'hello_world.index',
        compact('helloWorld')
    );
    }
}
