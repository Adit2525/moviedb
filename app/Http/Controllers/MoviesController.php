<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function homepage(){
        $movies = Movies::latest()->paginate(6);
        // dd($movies);
        return view('homepage',compact('movies'));
    }
    public function show($id)
    {
        $movie = Movies::findOrFail($id);
        return view('detail', compact('movie'));
    }
   
}
