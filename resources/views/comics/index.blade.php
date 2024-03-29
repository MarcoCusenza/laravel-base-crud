@extends('layouts.base')

@section('pageContent')
    <div class="container">
        <h1 class="text-center my-4 text-uppercase font-weight-bold">Tutti i fumetti</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Azioni</th>
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
                        <td>
                            <a href="{{ route('comics.show', $comic->id) }}"><button type="button"
                                    class="btn btn-primary">Visualizza</button></a>
                            <br>
                            <a href="{{ route('comics.edit', $comic->id) }}"><button type="button"
                                    class="btn btn-warning">Modifica</button></a>
                            <br>
                            <form id="delete-form"
                                onsubmit="return confirm('Sei sicuro di voler cancellare il Comic?\n\nPremi Conferma o Cancella.')"
                                action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger" id="delete-btn">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="buttons-container w-100 text-center">
            <a href="{{ route('comics.create') }}"><button type="button" class="btn btn-success">Aggiungi nuovo
                    Comic</button></a>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
@endsection
