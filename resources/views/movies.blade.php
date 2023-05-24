@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">Movies</h1>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class=" card-text">
                            {{ $movie->title }}
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
@endsection
