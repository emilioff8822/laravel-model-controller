@extends('layouts.main')
@section('content')
    <div class="container">
        <h1>{{ $movie->title }}</h1>
        <p><strong>Titolo Originale</strong> {{ $movie->original_title }}</p>
        <p><strong>Nazionalita</strong> {{ $movie->nationality }}</p>
        <p><strong>Data</strong> {{ $movie->date }}</p>
        <p><strong>Voto</strong> {{ $movie->vote }}</p>

    </div>
@endsection
