@extends('layout')

@section('content')

<h1>
    Movies categories
</h1>
@foreach($categories as $category)
    <a href="{{ route('movies.catergory', $category) }}">{{$category}}</a>
@endforeach
<h1>Movie List</h1>

Movies:
<ul>
@foreach ($movies as $id => $movie)
{{-- <li>{{$movie["title"]}} ({{$movie["year"]}})</li> --}}
<li><a href="{{ route('movies.filteredFilm', $id) }}">{{$movie["title"]}} ({{$movie["year"]}})</a></li>
@endforeach
</ul>

@endsection
