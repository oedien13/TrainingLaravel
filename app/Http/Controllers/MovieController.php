<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        return "Hello world, this is from movie";
    }

    public function show()
    {
        return view('movie');
    }
}
