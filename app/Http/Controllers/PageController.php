<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

//libreria per la gestione delle date
use Carbon\Carbon;

class PageController extends Controller
{
    //metodo che permette di inzializzare la route di index
    public function index(){

        $title = 'Noleggia film';

        $text = "Qui l'elenco dei princpali film che abbiamo a disposizione. Scegli ciò che preferisci.";

        //estrarre le informazioni sui film dal db
        $movies = Movie::all();
        return view('home', compact('movies', 'title', 'text'));
    }

    //metodo che permette di inzializzare la route di about
    public function description($id)
    {
        //estrarre i dati in base all'indice id
        $movie = Movie::find($id);

        //convertire il campo "date" del model in un formato europeo
        $movie->date = Carbon::parse($movie->date)->format('d/m/Y');

        return view('description', compact('movie'));
    }

    //metodo che permette di inzializzare la route di about
    public function about()
    {
        return view('about');
    }

    //metodo che permette di inzializzare la route di contacts
    public function contacts()
    {
        return view('contacts');
    }
}
