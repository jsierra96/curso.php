<?php
use App\Http\Controllers\firtsController;
?>
<h1>Detalle de peliculas</h1> 
<!-- Creacion de enlaces método url-->
<a href="{{ url( '/peliculas')}}">Ir al listado de peliculas método URL</a>
<br><br>
<!-- Creación de enlaces método action s-->
<a href="{{ action( [firtsController::class, 'editar'])}}">Ir al listado de peliculas método action</a>
