<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() 
    {
        return "<b>Hello world, this is from movie update</b>";
    }

    public function show($id)
    {
        echo "<h1>{$id}</h1><br>";

        // get movie base on on
        // select * from movie where id = $id;

        $movie = [
            'title' => '<script>alert("i get your cookies")</script>',
            'synopsis' => 'Penyihir sakti',
            'rating' => 4.5
        ];

        // return view('movie', ['movie' => $movie]); // cara pertama
        return view('movie', compact('movie'));
    }

    public function comment($movie, $comment)
    {
        return "{$movie} with coment id {$comment}";
    }
}
