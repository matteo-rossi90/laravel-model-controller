<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

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
