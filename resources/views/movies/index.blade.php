@extends('layouts.app')

@section('content')
    <h1>WELCOME TO HOME index page make now</h1>
    @foreach ($movies_total as $item)

        <h2>{{$item->name}}</h2>
        <p>created by: {{$item->regista}}</p>
        <p>original-language: {{$item->original_language}}</p>
        <p>cost: {{$item->cost}} mln USD</p>
        <p>{{$item->trama}}</p>
        <p>date: {{$item->Data_uscita}}</p>

        
    @endforeach
@endsection