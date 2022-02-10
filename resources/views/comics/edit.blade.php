@extends('layouts.base')


@section('pageContent')

    <div class="container">
        <h1>Modifica un Comic</h1>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del comic"
                    value="{{ $comic->title }}">
            </div>
            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" name="series"
                    placeholder="Inserisci il nome della serie" value="{{ $comic->series }}">
            </div>
            <div class="form-group">
                <label for="type">Tipo</label>
                <select class="form-control form-control-md" id="type" name="type">
                    <option value="comic book" {{ $comic->type == 'comic book' ? 'selected' : '' }}>Comic book</option>
                    <option value="graphic novel" {{ $comic->type == 'graphic novel' ? 'selected' : '' }}>Graphic novel
                    </option>
                    <option value="fanart" {{ $comic->type == 'fanart' ? 'selected' : '' }}>Fanart</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="8"
                    placeholder="Inserisci la descrizione del comic">{{ $comic->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" id="link" name="link" placeholder="Inserisci il link del comic"
                    value="{{ $comic->link }}">
            </div>
            <div class="form-group">
                <label for="sale_date">Data di rilascio</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date"
                    placeholder="Inserisci la data di rilascio del comic" value="{{ $comic->sale_date }}">
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo"
                    value="{{ $comic->price }}">
            </div>

            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection
