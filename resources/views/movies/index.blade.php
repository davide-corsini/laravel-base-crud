@extends('layouts.app')

@section('title','PAGINA INDEX')

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
                    {{--In teoria lui si aspetta un id ma laravel é forte e puo semplicemente completarlo senza freccia id --}}
                    <a class="btn btn-outline-info" href="{{ route('movies.show', ['movie' => $item->id]) }}">Dettagli</a>
                    <a class="btn btn-outline-warning" href="{{ route('movies.edit', ['movie' => $item->id]) }}">Modifica</a>
                    
                    <form class="d-inline-block" method="post" action="{{ route('movies.destroy', $item->id) }}">

                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                    </form>

                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection