@extends('layouts.app')

@section('title','PAGINA SHOW')

@section('content')
    <h1>WELCOME TO HOME SHOW page make now</h1>

    <p>Trama {{$movie->trama}}</p> 
    <p>E' costato circa: {{$movie->cost}}mln</p>   
    <p>Uscito il: {{$movie->Data_uscita}}</p>

@endsection