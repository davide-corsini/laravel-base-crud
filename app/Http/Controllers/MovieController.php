<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies_tab = Movie::all();
        $data = [
            'movies_total'  =>  $movies_tab
        ];
        return view('movies.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //REQUEST MI RESTITUISCE UNA RICHIESTA HTTP
    public function store(Request $request)
    {
        $data = $request->all();
        //validation
        // dd($data);
        $movieNew = new Movie();
        //sto indicendo devi prendere questa colonna e associargli questo dato
        $movieNew->name = $data['name'];
        $movieNew->regista = $data['regista'];
        $movieNew->original_language= $data['original_language'];
        $movieNew->cost = $data['cost'];
        $movieNew->trama = $data['trama'];
        $movieNew->Data_uscita = $data['Data_uscita'];
        $movieNew->poster = $data['poster'];


        
        //adesso devo salvare questi dati nel db
        $movieNew->save();
        //controllare il 
        // dd($movieNew);
        //*RICORDATELO
        // return redirect()->route('movies.show',$movieNew->id);
        //_QUESTO E'SBAGLIATO
        return redirect()->route('movies.show',$movieNew->find($movieNew->id));

        //.attenzione davide, dopo prova pure il metodo fill!
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie_selected = Movie::find($id);

        if($movie_selected){
            $data = [
                'movie' => $movie_selected
            ];
            return view('movies.show', $data);
        }
        abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
