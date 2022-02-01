@extends('layouts.app')

@section('content')
    <section id="popular">
        <div class="container mt-4 py-3">
            <h2 class="text-uppercase mb-3">Séries Populares</h2>
            <div class="row">
                @foreach ($popularShows as $show)
                    <x-show-card :show="$show" :generos="$generos" />
                @endforeach
            </div>
        </div>
    </section>

    <section id="top-rated">
        <div class="container py-3">
            <h2 class="text-uppercase mb-3">Séries Premiadas</h2>
            <div class="row">
                @foreach ($topRatedShows as $show)
                    <x-show-card :show="$show" :generos="$generos" />
                @endforeach
            </div>
        </div>
    </section>
@endsection