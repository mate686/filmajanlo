@extends('layout')

@section('filteredM')



Filtered Movie:
<h2>
{{$filteredMovie["title"]}} ({{$filteredMovie["year"]}})
</h2>
<p>{{$filteredMovie["description"]}} </p>
<h3>Director:{{$filteredMovie["director"]}}</h3>
<img src="{{$filteredMovie["poster"]}}">
<br/>

<a href="{{ route('movies.filteredFilm', $slug-1 === 0 ?$slug=$maxdb:$slug-1 ) }}" class="previous">&laquo; Previous</a>
<a href="{{ route('movies.filteredFilm', $slug+1 === $maxdb+1?$slug=1:$slug+1) }}" class="next">Next &raquo;</a>

@endsection
