<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\movies;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index () {
        $title = 'home';
        return view('home', compact('title'));
    }

    public function movies () {
        // $movies = movies::all(); // SELECT * ALL  from movies
        $movies = movies::orderBy('title')->get(); //ordina i film in ordine alfabetico per titolo
        return view('movies', compact('movies'));
    }

    public function contacts () {
        return view('contacts');
    }

    public function details ($id) {
    //$movie = movies::where('id', $id)->first();



    $movie = movies::find($id);
    return view('details', compact('movie'));
    }
}