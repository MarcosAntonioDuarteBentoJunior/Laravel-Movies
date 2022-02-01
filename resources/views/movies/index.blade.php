@extends('layouts.app')

@section('content')
    <section id="popular">
        <div class="container mt-4 py-3">
            <h2 class="text-uppercase mb-3">Filmes Populares</h2>
            <div class="row">
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :generos="$generos" />
                @endforeach
            </div>
        </div>
    </section>

    <section id="nowPlaying">
        <div class="container py-3">
            <h2 class="text-uppercase mb-3">Em Cartaz</h2>
            <div class="row">
                @foreach ($nowPlayingMovies as $nowPlaying)
                    <x-movie-card :movie="$nowPlaying" :generos="$generos" />
                @endforeach
            </div>
        </div>
    </section>
@endsection