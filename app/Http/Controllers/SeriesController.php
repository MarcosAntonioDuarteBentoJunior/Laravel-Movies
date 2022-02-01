<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularShows = Http::get('https://api.themoviedb.org/3/tv/popular?api_key=e001757e234389b60534a5b1f09a7b73&language=pt-BR')
                        ->json()['results'];

        $topRatedShows = Http::get('https://api.themoviedb.org/3/tv/top_rated?api_key=e001757e234389b60534a5b1f09a7b73&language=pt-BR')
                            ->json()['results'];

        $arrayGeneros = Http::get('https://api.themoviedb.org/3/genre/tv/list?api_key=e001757e234389b60534a5b1f09a7b73&language=pt-BR')
                        ->json()['genres'];

        $generos = collect($arrayGeneros)->mapWithKeys(function ($genero) {
            return [
                $genero['id'] => $genero['name']
            ];
        });

        return view('shows.index', compact('popularShows', 'topRatedShows', 'generos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Http::get('https://api.themoviedb.org/3/tv/' . $id . '?api_key=e001757e234389b60534a5b1f09a7b73&append_to_response=credits,videos,images&language=pt-BR&include_image_language=en,null')
                    ->json();

        return view('shows.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
