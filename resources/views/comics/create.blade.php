@extends('layouts.base')


@section('pageContent')

<h1>Crea un nuovo Comic</h1>

<form action="{{route("comics.store")}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del comic">
    </div>
    <div class="form-group">
      <label for="series">Serie</label>
      <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci il nome della serie">
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
        <label for="cooking_time">Tempo di cottura</label>
        <input type="number" class="form-control" id="cooking_time" name="cooking_time" placeholder="Inserisci il tempo di cottura">
    </div>
    <div class="form-group">
        <label for="weight">Peso</label>
        <input type="number" class="form-control" id="weight" name="weight" placeholder="Inserisci il peso del prodotto">
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="8" placeholder="Inserisci la descrizione del prodotto"></textarea>
    </div>
    <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci l'url dell'immagine">
    </div>
    <button type="submit" class="btn btn-primary">Crea</button>
  </form>

@endsection
