@extends('layouts.app')

@section('title','Aggiungi movie')

@section('content')
    <h1>Inserisci nuovo Film</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{route('movies.store')}}">
        @method('POST')
        @csrf
        <div class="form-group">
            <label for="input-title">Titolo</label>
            <input type="text" class="form-control" name="name" id="input-title" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="input-regista">Regista</label>
            <input type="text" name="regista" class="form-control" id="input-regista" >
        </div>
        <div class="form-group">
            <label for="input-language">Lingua</label>
            <input type="text" name="original_language" class="form-control" id="input-language" >
        </div>
        <div class="form-group">
            <label for="input-cost">Costo Produzione:</label>
            <input type="text" name="cost" class="form-control" id="input-cost" >
        </div>
        <div class="form-group">
            <label for="input-trama">Trama</label>
            <input type="text" name="trama" class="form-control" id="input-trama" >
        </div>
        <div class="form-group">
            <label for="input-genere">Genere</label>
            <select name="genere" class="form-select" id="input-genere" aria-label="Disabled select example">
                <option selected>Scegli Categoria</option>
                <option value="commedia">Commedia</option>
                <option value="fantascienza">Fantascienza</option>
                <option value="azione">Azione</option>
                <option value="thriller">Thriller</option>
                <option value="horror">Horror</option>

            </select>
        </div>
        <div class="form-group">
            <label for="input-date">Data di uscita:</label>
            <input type="text" name="Data_uscita" class="form-control" id="input-date" >
        </div>
        <div class="form-group">
            <label for="input-img">Link poster:</label>
                <textarea class="form-control" id="input-img" name="poster" rows="3"></textarea>
        </div>
        {{-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection