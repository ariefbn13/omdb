<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FilmController extends Controller
{
    public function index()
    {   
        
        $response = Http::get('http://www.omdbapi.com', [
            'apikey' => '6807ff94',
            's' => 'movie',
        ]);

        $data = json_decode($response,true);
        return view('home', [
            'data' => $data,
            'title' => 'Home'
        ]);
    }

    public function search(Request $request)
    {
        $search_query = $request->input('search_film');
        $response = Http::get('http://www.omdbapi.com', [
            'apikey' => '6807ff94',
            's' => $search_query,
        ]);

        $search_data = json_decode($response,true);
        return view('home', [
            'data' => $search_data,
            'title' => 'Home'
        ]);

    }

    public function detail (Request $request)
    {
        $detail_query = $request->input('detail_film');
        $response = Http::get('http://www.omdbapi.com', [
            'apikey' => '6807ff94',
            'i' => $detail_query,
            'plot' => 'full'
        ]);

        $detail_data = json_decode($response,true);
        return view('detailFilms', [
            'data' => $detail_data,
            'title' => 'My Favorite Films'
        ]);
    }

}
