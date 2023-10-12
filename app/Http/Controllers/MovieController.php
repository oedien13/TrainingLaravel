<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() 
    {
        $movies = [
            [
                'id' => 1,
                'title' => 'Harry Potter',
                'synopsis' => 'Penyihir sakti',
                'rating' => 4.5,
                'image' => 'http://images5.fanpop.com/image/photos/29000000/harry-potter-harry-potter-29097111-1024-768.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Spiderman',
                'synopsis' => 'Manusia laba-laba',
                'rating' => 4,
                'image' => 'https://tse1.mm.bing.net/th?id=OIP.6rowbrftQNHnF2KyZxiHHgHaEo&pid=Api&P=0&h=180'
            ],
        ];
        
        // return view('movie', ['movies' => $movies]);
        return view('pages.movie.index', compact('movies'));
    }

    public function show($id)
    {

        // get movie base on on
        // select * from movie where id = $id;

        $movie = [
            'title' => 'Harry Potter',
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
