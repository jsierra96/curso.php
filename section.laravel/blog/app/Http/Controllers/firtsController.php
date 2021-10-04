<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firtsController extends Controller
{
    
    public function editar() {
        echo 'metodo editar del controlador firtsController';
    }

    public function redirigir() {
        //return redirect()->action('PeliculasController@redirigir');

        return redirect('/peliculas');
    }
}
