<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Movie;

class MovieController extends Controller
{
    public function home()
    {
        $movies = Movie::all();
        return view('pages.movies', compact('movies'));
    }

    public function show($id)
    {   
        
        $movie = Movie::find($id);
        return view('pages.movie', compact('movie'));
    }
}
