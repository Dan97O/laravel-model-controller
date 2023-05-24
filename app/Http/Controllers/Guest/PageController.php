<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');

    }
    public function movies()
    {
        $movies = Movie::all();
        //dd($movies);
        return view('movies', compact('movies'));

    }
}
