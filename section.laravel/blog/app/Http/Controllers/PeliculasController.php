<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function formulario() {
        return view('Peliculas.Formulario');
    }

    public function recibir( Request $request ) {

        var_dump( $request->input('name') );
    }
}
