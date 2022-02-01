<div class="justify-content-end align-self-center" x-data="{ isOpen: true}" @click.away="isOpen=false" >
    <form class="d-flex me-3 position-relative">
        <input class="form-control me-2" wire:model.debounce.500ms="search" type="text" placeholder="Procure filmes e séries" @keydown.escape.window="isOpen=false" @focus="isOpen=true" @keydown="isOpen=true" @keydown.shift.tab="isOpen=false">

        <div wire:loading class="spinner-border text-success fs-5 position-absolute top-0" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </form>

    <div class="position-absolute bg-dark text-white" id="dropDown">
        @if (strlen($search) >= 2)
            @if ($searchResults->count() > 0)
                <ul class="list-unstyled" x-show.transition.opacity="isOpen">
                    @foreach ($searchResults as $result)
                        <li class="bg-dark px-2 py-3 border-bottom border-light text-decoration-none">
                            <a href="{{ route('movies.show', $result['id']) }}" class="text-decoration-none mx-auto" @if($loop->last) @keydown.tab.exact="isOpen=false" @endif>
                                @if (isset($result['poster_path']))
                                    <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="" class="img-fluid dropDownImg me-3">
                                @else
                                    <img src="https://via.placeholder.com/50x75" alt="" class="img-fluid dropDownImg me-3">
                                @endif
                                
                                @if (isset($result['title']))
                                    {{ $result['title'] }}
                                @else
                                    {{ $result['name'] }}
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="alert alert-danger">
                    Sem resultados para "{{ $search }}"
                </div>
            @endif
        @endif
    </div>
</div>