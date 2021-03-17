@extends('layouts.app')

@section('content')
    <h1>WELCOME TO HOME index page make now</h1>
    @foreach ($movies_total as $item)

        
            
        <h2>{{$item->name}}</h2>
        <a href="{{ route('movies.show', ['movie' => $item->id]) }}">Dettagli</a>
        <p>created by: {{$item->regista}}</p>
        <p>original-language: {{$item->original_language}}</p>
        

        
    @endforeach
@endsection