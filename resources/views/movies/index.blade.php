@extends('layouts.app')

@section('content')
    <h1>WELCOME TO HOME index page make now</h1>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#id</th>
            <th scope="col">Name</th>
            <th scope="col">Regista</th>
            <th scope="col">Original language</th>
            <th scope="col">Dettagli movie</th>
            </tr>
        </thead>
        @foreach ($movies_total as $item)
        <tbody>
            <tr>
                <th scope="row">{{$item->id}}</th>
                {{-- <th>{{$item-id}}</th> --}}
                <td><h2>{{$item->name}}</h2></td>
                <td><p>{{$item->regista}}</p></td>
                <td><p>{{$item->original_language}}</p></td>
                <td>
                    <a href="{{ route('movies.show', ['movie' => $item->id]) }}">Dettagli</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection