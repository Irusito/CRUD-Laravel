@extends('layout')
@section('contenido')
    <div style="padding: 3rem 0 12rem 0">
        <div class="table-container" >
    <h1> Añadir un nuevo cliente</h1>
    <hr>
    <br>
    <form action="{{route("clientes.store")}}" method="post">
        <!-- campo oculto con un token de seguridad de laravel para que funcione -->
        @csrf

        <div class="form-block ">
            <label class="form-label" for="nombre"> Nombre </label>
            <input class="form-control" type="text" name="nombre"  id="nombre"><br>
        </div>
        <div class="form-block ">
            <label class="form-label" for="apellido"> Apellido </label>
            <input class="form-control" type="text" name="apellido"  id="apellido"><br>
        </div>
        <div class="form-block ">
            <label class="form-label" for="direccion"> Direccion </label>
            <input class="form-control" type="text" name="direccion"  id="direccion"><br>
        </div>
        <div class="form-block ">
            <label class="form-label" for="email"> Email </label>
            <input class="form-control" type="text" name="email"  id="email"><br>
        </div>
        <div class="form-block " style="margin-bottom: 2rem">
            <label class="form-label" for="password"> Password </label>
            <input class="form-control" type="text" name="password" id="password"><br>
        </div>
        <input class="btn-save" type="submit" value="Guardar">
    </form>
    </div>
    </div>

@endsection
