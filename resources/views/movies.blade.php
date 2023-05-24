@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">Movies</h1>
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-5 g-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">
                                <strong>Titolo originale:</strong> {{ $movie->original_title }}
                            </p>
                            <p class="card-text">
                                <strong>Nazionalità:</strong> {{ $movie->nationality }}
                            </p>
                            <p class="card-text">
                                <strong>Data:</strong> {{ $movie->date }}
                            </p>
                            <p class="card-text">
                                <strong>Voto:</strong> {{ $movie->vote }}
                            </p>
                        </div>
                    </div>

                </div>
            @endforeach



        </div>
    </div>
@endsection
