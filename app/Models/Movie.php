<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function GetMovies(){
        return [
            1 => [
                'title' => "The Matrix",
                'dicertor' => "The Wachowskis",
                'category' => "Sci-Fi",
                'year' => 1999,
                'description' => 'When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence.',
                'image' => "https://www.imdb.com/title/tt0133093/mediaviewer/rm1764071938/?ref_=tt_ov_i"
            ],
            2 => [
                'title' => "Inception",
                'dicertor' => "Chistopher Nolen",
                'category' => "Sci-Fi",
                'year' => 2010,
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O., but his tragic past may doom the project and his team to disaster.',
                'image' => "https://www.imdb.com/title/tt1375666/mediaviewer/rm4241487105/?ref_=tt_ov_i"
            ],
            3 => [
                'title' => "Interstellar",
                'dicertor' => "Chistopher Nolen",
                'category' => "Sci-Fi",
                'year' => 2014,
                'description' => 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.',
                'image' => "https://www.imdb.com/title/tt0816692/mediaviewer/rm3520863489/?ref_=tt_ov_i"
            ],
            4 => [
                'title' => "The Godfather",
                'dicertor' => "Francis Ford Coppola",
                'category' => "Crime",
                'year' => 1972,
                'description' => "The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.",
                'image' => "https://www.imdb.com/title/tt0068646/mediaviewer/rm3135369473/?ref_=tt_ov_i"
            ],
            5 => [
                'title' => "Pulp Fiction",
                'dicertor' => "Quentin Tarantino",
                'category' => "Crime",
                'year' => 2014,
                'description' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'image' => "https://www.imdb.com/title/tt0110912/mediaviewer/rm1229746689/?ref_=tt_ov_i"
            ]
        ];
    }
}
