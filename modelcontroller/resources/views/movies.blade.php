@extends('layouts.main')

@section('content')
    <div class="container">

        <h1>Elenco Film</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITOLO</th>
                    <th scope="col">TITOLO ORIGINALE</th>
                    <th scope="col">NAZIONALITA'</th>
                    <th scope="col">DATA</th>
                    <th scope="col">VOTO</th>
                    <th scope="col">AZIONI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <th scope="row">{{ $movie->id }}</th>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->original_title }}</td>
                        <td>{{ $movie->nationality }}</td>
                        <td>{{ $movie->date }}</td>
                        <td>{{ $movie->vote }}</td>
                        <td><a href="{{ route('details', ['id' => $movie->id]) }}" class="btn btn-primary">DETTAGLI</a></td>
                    </tr>
                @endforeach


            </tbody>
        </table>

    </div>
@endsection
