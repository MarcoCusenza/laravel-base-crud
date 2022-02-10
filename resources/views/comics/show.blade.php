@extends('layouts.base')

@section('pageContent')

    <div class="container text-center">
        <div class="card w-50 mx-auto my-5">
            <div class="card-body">
                <h5 class="card-title">{{ $comic['title'] }}</h5>
                <p class="card-text">{{ $comic['description'] }}</p>
                <p class="card-text">{{ $comic['type'] }}</p>
                <p class="card-text"><small class="text-muted">{{ $comic['series'] }}</small></p>
            </div>
        </div>

        <a href="{{ route('comics.index') }}"><button type="button" class="btn btn-primary">Torna a tutti i
                Comics</button></a>
    </div>

@endsection
