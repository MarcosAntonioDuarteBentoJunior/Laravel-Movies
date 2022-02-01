@extends('layouts.app')

@section('content')
    <section id="info">
        <div class="container mt-4 py-3 text-white">
            <div class="row">
                <div class="col-12 col-md-5 col-lg-4">
                    @if ($movie['poster_path'])
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" class="img-fluid w-100 h-100" alt="...">
                    @else
                        <img src="{{ asset('/img/no-photo.png') }}" class="img-fluid w-100 h-100" alt="...">
                    @endif
                </div>
                <div class="col-12 col-md-7 col-lg-8 py-3">
                    <h2 class="mb-3 text-uppercase">
                        {{ $movie['title'] }}
                    </h2>
                    <p class="mb-3">
                        {{ $movie['overview'] }}
                    </p>
                    <div class="text-center d-flex justify-content-between mb-5">
                        <div>
                            <i class="fas fa-star"></i> {{ $movie['vote_average'] * 10 . '%' }}
                        </div>
                        <div>
                            <i class="fas fa-calendar-alt"></i> {{ date('d/m/Y', strtotime($movie['release_date']))}}
                        </div>
                        <div>
                            <i class="fas fa-list-ul"></i>
                            @foreach ($movie['genres'] as $genre)
                                {{ $genre['name'] }}@if(!$loop->last), @endif
                            @endforeach
                        </div>
                    </div>
                    <h4 class="mb-3">Produção</h4>
                    <div class="mb-4">
                        <div class="d-flex">
                            @foreach ($movie['credits']['crew'] as $equipe)
                                @if ($loop->index < 3)
                                        <div>{{ $equipe['name'] }}</div>
                                        @php
                                            $loop->index == 2 ? print('.') : print(',' . '&nbsp;')
                                        @endphp
                                @else
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @if (count($movie['videos']['results']) > 0)
                        <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" target="_blanck" class="btn btn-warning px-3 py-3">
                            <i class="far fa-play-circle me-2"></i> <span class="align-self-center">Ver trailer</span>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section id="cast">
        <div class="container mt-4">
            <h2 class="text-uppercase mb-3">Elenco Principal</h2>
            <div class="row">
                @foreach ($movie['credits']['cast'] as $elenco)
                    @if ($loop->index < 4)
                        <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
                            <div class="card h-100 border-0 bg-dark text-white">
                                @if ($elenco['profile_path'])
                                    <img src="{{ 'https://image.tmdb.org/t/p/w300/' . $elenco['profile_path'] }}" class="card-img-top" alt="...">
                                @else
                                    <img src="{{ asset('/img/no-photo.png') }}" class="img-fluid w-100 h-100" alt="...">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $elenco['name'] }}</h5>
                                    <p class="card-text">{{ $elenco['character'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="images">
        <div class="container py-4">
            <h2 class="text-uppercase mb-3">Imagens</h2>
            @if ($movie['images']['posters'])
                <div class="row">
                    @foreach ($movie['images']['posters'] as $image)
                        <div class="col-12 col-md-6 col-lg-4 mb-3 mb-lg-5 content">
                            <div class="card h-100 border-0">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/' .  $image['file_path'] }}" alt="" class="w-100">
                            </div>
                        </div>
                    @endforeach

                    <div class="text-center">
                        <button id="loadMore" class="btn btn-outline-primary">Mostrar mais</button>
                    </div>
                </div>
            @else
                <div class="alert alert-danger">
                    Este Título não possui imagens.
                </div>
            @endif
        </div>
    </section>
@endsection

@section('scripts')
    <!-- JQUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".content").slice(0, 3).show();
            if($(".content:hidden").length == 0) {
                    $("#loadMore").addClass("no-content");
                }
            $("#loadMore").on("click", function(e){
                e.preventDefault();
                $(".content:hidden").slice(0, 3).slideDown();
                if($(".content:hidden").length == 0) {
                    $("#loadMore").addClass("no-content");
                }
            });
        });
    </script>
@endsection