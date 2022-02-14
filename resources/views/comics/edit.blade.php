@extends('layouts.base')


@section('pageContent')
    <div class="container">
        <h1>Modifica un Comic</h1>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    placeholder="Inserisci il titolo del comic" value="{{ old('title') ? old('title') : $comic->title }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                    placeholder="Inserisci il nome della serie"
                    value="{{ old('series') ? old('series') : $comic->series }}">
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Tipo</label>
                <select class="form-control form-control-md @error('type') is-invalid @enderror" id="type" name="type">
                    @php
                        $selected = old('type') ? old('type') : $comic->type;
                    @endphp
                    <option value="comic book" {{ $selected == 'comic book' ? 'selected' : '' }}>Comic book</option>
                    <option value="graphic novel" {{ $selected == 'graphic novel' ? 'selected' : '' }}>Graphic novel
                    </option>
                    <option value="fanart" {{ $selected == 'fanart' ? 'selected' : '' }}>Fanart</option>
                </select>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" rows="8"
                    placeholder="Inserisci la descrizione del comic">{{ old('description') ? old('description') : $comic->description }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link"
                    placeholder="Inserisci il link del comic" value="{{ old('link') ? old('link') : $comic->link }}">
                @error('link')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="sale_date">Data di rilascio</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                    name="sale_date" placeholder="Inserisci la data di rilascio del comic"
                    value="{{ old('sale_date') ? old('sale_date') : $comic->sale_date }}">
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" step="0.1" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" placeholder="Inserisci il prezzo"
                    value="{{ old('price') ? old('price') : $comic->price }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection
