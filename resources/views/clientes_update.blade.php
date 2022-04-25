@extends('layout')
@section('contenido')
    <div style="padding: 3rem 0 3rem 0">
        <div class="table-container">
            <h2> Datos del cliente <span style="color: #F7E5A1"> ' {{$cliente->id}} ' </span></h2>
            <hr>
            <h4> - Nombre: <span style="color: #F7E5A1">  {{$cliente->nombre}} </span></h4>
            <h4> - Apellido: <span style="color: #F7E5A1">   {{$cliente->apellido}}</span></h4>
            <h4> - Dirección: <span style="color: #F7E5A1">  {{$cliente->direccion}} </span></h4>
            <h4> - Email:<span style="color: #F7E5A1">   {{$cliente->email}}</span></h4>
            <h4> - Password:<span style="color: #F7E5A1">   {{$cliente->password}} </span></h4>
        </div>
    </div>

    <div style="padding: 1.5rem 0 3rem 0">
        <div class="table-container">
            <h2> Modificar el cliente </h2>
            <hr>
            <br>
            <div class="form-div">
                <form action="{{route("clientes.update",$cliente->id)}}" method="POST">
                    <!-- campo oculto con un token de seguridad de laravel para que funcione -->
                @csrf
                <!-- método put para el formulario -->
                    @method('PUT')
                    <div class="form-block ">
                        <label class="form-label" for="nombre"> Nombre </label>
                        <input class="form-control" type="text" name="nombre" value="{{$cliente->nombre}}" id="nombre"><br>
                    </div>
                    <div class="form-block ">
                        <label class="form-label" for="apellido"> Apellido </label>
                        <input class="form-control" type="text" name="apellido" value="{{$cliente->apellido}}" id="apellido"><br>
                    </div>
                    <div class="form-block ">
                        <label class="form-label" for="direccion"> Direccion </label>
                        <input class="form-control" type="text" name="direccion" value=" {{$cliente->direccion}}" id="direccion"><br>
                    </div>
                    <div class="form-block ">
                        <label class="form-label" for="email"> Email </label>
                        <input class="form-control" type="text" name="email" value="{{$cliente->email}}" id="email"><br>
                    </div>
                    <div class="form-block " style="margin-bottom: 2rem">
                        <label class="form-label" for="password"> Password </label>
                        <input class="form-control" type="text" name="password" value="{{$cliente->password}}" id="password"><br>
                    </div>
                    <input class="btn-save" type="submit" value="Guardar">
                </form>
            </div>
        </div>
    </div>

@endsection
