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

// select con film  con id=2 restituisce direttament l'ogetto
//$movie = movies::find(2);

//select con id=2 ma con where che PUSHA i risultati in un array. 2 param 1 colonna 2 valore. TRE param 1 colonna 2operatore 3valore
//$movie = movies::where('id', 2)->get();

//uso first
//$movie = movies::where('id', 1)->first();

return view('movies', compact('movies'));

}

public function contacts () {
        return view('contacts');

}

public function details ($id) {
        $movie = movies::find($id);

        if($movie){
            return view('details', ['movie' => $movie]);

        }else {
            return redirect()->route ('movies');
        }

}





}