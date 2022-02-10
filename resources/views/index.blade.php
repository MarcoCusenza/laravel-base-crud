@extends('layouts.base')


@section('pageContent')
    <div class="container text-center">
        <h1 class="my-4">Comics</h1>
        <a href="{{ route('comics.index') }}"><button type="button" class="btn btn-primary">Mostra tutti i
                Comics</button></a>
        <a href="{{ route('comics.create') }}"><button type="button" class="btn btn-success">Aggiungi nuovo
                Comic</button></a>
    </div>
@endsection
