@extends('layouts.main')

@section('content')

<div class="container my-5">
    <h1 class="my-4">{{$movie->title}}</h1>
    <ul>
        <li class="py-2">
            <span class="little-title">Lingua: </span><span> {{$movie->nationality }}</span>
        </li>
        <li class="py-2">
            <span class="little-title">Voto: </span><span> {{$movie->vote }}</span>
        </li>
        <li class="py-2">
            <span class="little-title">Data di uscita: </span><span> {{$movie->date }}</span>
        </li>
    </ul>


</div>




@endsection
