<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-3">
    <div class="card h-100 bg-dark text-white">
        <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $show['poster_path'] }}" class="card-img-top" alt="...">
        <div class="card-body">
            <div class="details text-center d-flex justify-content-between mb-4">
                <div>
                    <i class="fas fa-star"></i> {{ $show['vote_average'] * 10 . '%' }}
                </div>
                <div>
                    <i class="fas fa-calendar-alt"></i> {{ date('d/m/Y', strtotime($show['first_air_date']))}}
                </div>
            </div>
            <h5 class="card-title">{{ $show['name'] }}</h5>
            <p class="card-text">
                @foreach ($show['genre_ids'] as $genre)
                    {{ $generos->get($genre)}}@if(!$loop->last), @endif
                @endforeach
            </p>
            <div class="text-center">
                <a href="{{ route('tv-shows.show', $show['id']) }}" class="btn btn-outline-primary">Ver mais</a>
            </div>
        </div>
    </div>
</div>