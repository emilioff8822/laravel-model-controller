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

    $movie = movies::all();

 return view('movies');

}

public function contacts () {
        return view('contacts');

}





}