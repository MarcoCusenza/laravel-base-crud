<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $comics = Comic::all();
    return view("comics.index", compact("comics"));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view("comics.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // prendo i dati del form
    $data = $request->all();
    // validazione
    $request->validate([
      "title" => "required|string|max:100|unique:comics",
      "series" => "required|string|max:100",
      "type" => [
        "required",
        Rule::in(["comic book", "graphic novel", "fanart"])
      ],
      "description" => "required|string",
      "link" => "nullable|url",
      "sale_date" => "required|date",
      "price" => "required|numeric",
    ]);
    // aggiorno la risorsa con i nuovi dati
    $newComic = Comic::create($data);
    // restituisco la pagina show della risorsa modificata
    return redirect()->route('comics.show', $newComic->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Comic $comic)
  {
    // $comic = Comic::find($id);
    return view("comics.show", compact("comic"));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Comic $comic)
  {
    return view("comics.edit", compact("comic"));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Comic $comic)
  {
    // prendo tutti i dati del form
    $data = $request->all();
    // validazione
    $request->validate([
      "title" => "required|string|max:100|unique:comics,title,{$comic->id}",
      "series" => "required|string|max:100",
      "type" => [
        "required",
        Rule::in(["comic book", "graphic novel", "fanart"])
      ],
      "description" => "required|string",
      "link" => "nullable|url",
      "sale_date" => "required|date",
      "price" => "required|numeric",
    ]);
    // aggiorno la risorsa con i nuovi dati
    $comic->update($data);
    // restituisco la pagina show della risorsa modificata
    return redirect()->route('comics.show', $comic->id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Comic $comic)
  {
    $comic->delete();

    return redirect()->route("comics.index");
  }
}
