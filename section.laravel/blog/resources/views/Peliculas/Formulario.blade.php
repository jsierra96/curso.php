<h1>Formulario laravel</h1>

<form action="{{ url('/recibir') }}" method="post">
    {{ csrf_field() }}
    <label for="name">Nombre: </label><br>
    <input type="text" name="name" id="name">

    <br><br><br>
    <label for="email">Correo electrónico: </label><br>
    <input type="email" name="email" id="email">
    <br><br>

    <input type="submit" value="Enviar">
</form>