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

 $movies = movies::all(); // SELECT * ALL  from movies


 return view('movies', compact('movies'));

}

public function contacts () {
        return view('contacts');

}





}
