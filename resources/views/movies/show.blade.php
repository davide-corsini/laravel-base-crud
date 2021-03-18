@extends('layouts.app')

@section('title','PAGINA SHOW')

@section('content')
    <h1 style="text-align: center;">Dettagli Film</h1>
    <div class="box-movie">
        <p>Trama {{$movie->trama}}</p> 
        <p>E' costato circa: {{$movie->cost}}mln</p>   
        <p>Uscito il: {{$movie->Data_uscita}}</p>
        <img style="width: 200px; height: 200px; border-radius: 50%;" src="{{$movie->poster}}" alt="">
    </div>

@endsection