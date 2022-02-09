@extends('layouts.base')

@section('pageContent')

    <div class="card w-50 mx-auto my-5">
        <div class="card-body">
            <h5 class="card-title">{{ $comic['title'] }}</h5>
            <p class="card-text">{{ $comic['description'] }}</p>
            <p class="card-text">{{ $comic['type'] }}</p>
            <p class="card-text"><small class="text-muted">{{ $comic['series'] }}</small></p>
        </div>
    </div>

@endsection
