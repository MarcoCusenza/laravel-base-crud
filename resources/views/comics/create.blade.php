@extends('layouts.base')


@section('pageContent')

    <div class="container">
        <h1>Crea un nuovo Comic</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title"
                    placeholder="Inserisci il titolo del comic">
            </div>
            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" name="series"
                    placeholder="Inserisci il nome della serie">
            </div>
            <div class="form-group">
                <label for="type">Tipo</label>
                <select class="form-control form-control-md" id="type" name="type">
                    <option value="comic book">Comic book</option>
                    <option value="graphic novel">Graphic novel</option>
                    <option value="fanart">Fanart</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="8"
                    placeholder="Inserisci la descrizione del comic"></textarea>
            </div>

            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" id="link" name="link" placeholder="Inserisci il link del comic">
            </div>
            <div class="form-group">
                <label for="sale_date">Data di rilascio</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date"
                    placeholder="Inserisci la data di rilascio del comic">
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
            </div>

            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
@endsection
