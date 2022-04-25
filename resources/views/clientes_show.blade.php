@extends('layout')
@section('contenido')
    <div style="padding: 3rem 0 5rem 0">
    <div class="table-container" >
        <h1> Datos del cliente <span style="color: #F7E5A1"> ' {{$cliente->id}} ' </span></h1>
        <hr>

        <h3> - Nombre:  <span style="color: #F7E5A1">  {{$cliente->nombre}} </span></h3>
        <h3> - Apellido:  <span style="color: #F7E5A1">   {{$cliente->apellido}}</span> </h3>
        <h3> - Dirección: <span style="color: #F7E5A1">  {{$cliente->direccion}} </span></h3>
        <h3> - Email:<span style="color: #F7E5A1">   {{$cliente->email}}</span> </h3>
        <h3> - Password:<span style="color: #F7E5A1">   {{$cliente->password}} </span></h3>

    </div>
    </div>
@endsection
