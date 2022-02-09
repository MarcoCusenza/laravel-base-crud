@extends('layouts.base')

@section('pageContent')
  <h1 class="text-center my-4 text-uppercase font-weight-bold">Tutti i fumetti</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
                <th scope="col">Prezzo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>$ {{ $comic->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
