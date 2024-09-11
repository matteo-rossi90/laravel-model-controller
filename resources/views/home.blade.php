{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>{{ $title }}</h1>
    {{-- <img src="{{ Vite::asset('resources/img/colibri.jpg') }}" alt="" class="img-fluid"> --}}

    <p>
        {{ $text }}
    </p>

    <div class="row g-3 wrap">
        @foreach ( $movies as $movie )
        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title py-2">{{ $movie->title }}</h5>
                        <div class="py-2">
                            <span class="little-title">Titolo originale:</span><span> {{$movie->original_title }}</span>
                        </div>
                        <div class="d-flex justify-content-center py-3">
                            <a href="{{ route('description', ['id' => $movie->id]) }}" class="btn btn-primary">Per saperne di più</a>
                        </div>
                    </div>
                </div>

        </div>
        @endforeach

    </div>


</div>

@endsection


@section('titlePage')
    home
@endsection
