<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 border-bottom border-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('movies.index') }}"><i class="fas fa-film"></i> Laravel Movies</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('movies.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('movies.index') }}">Filmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shows.index') }}">Séries</a>
                </li>
            </ul>

            <livewire:search-dropdown>
        </div>
    </div>
</nav>