<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::GetMovies();
        $categories = collect($movies)->pluck('category')->unique()->values();
        return view('movies.index', ['movies' => $movies, 'categories' => $categories]);
        //return view('movies.index', compact('movies','categories'));
    }

    public function category(string $slug){
        $movies = Movie::getMovies();

        $filteredMovies = collect($movies)->filter(function ($movie) use ($slug){
            return $movie['category'] === $slug;
        });

        if($filteredMovies->isEmpty()){
            abort(404,"Invalid category: $slug ");
        }

        return view("movies.category", compact('filteredMovies','slug'));
    }

    public function search(string $slug){
        $movies = Movie::getMovies();
        $maxdb = Count($movies);
        $filteredMovie = $movies[$slug];
        return view("movies.filtered", compact('filteredMovie','slug', 'maxdb'));
    }

}
