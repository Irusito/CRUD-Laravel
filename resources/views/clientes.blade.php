@extends('layout')
@section('contenido')
    <div class="table-container">

        <h1> Listado de clientes</h1>
        <hr>
        <br>
        <table>
            <tr>

                <td style="border-bottom: 1px solid #eee"><strong>ID</strong></td>
                <td style="border-bottom: 1px solid #eee"><strong>Nombre</strong></td>
                <td style="border-bottom: 1px solid #eee"><strong>Apellido</strong></td>
                <td style="border-bottom: 1px solid #eee"><strong>Dirección</strong></td>
                <td style="border-bottom: 1px solid #eee"><strong>Email</strong></td>
                <td style="border-bottom: 1px solid #eee"><strong>Password</strong></td>

            </tr>

            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->apellido}}</td>
                    <td>{{$cliente->direccion}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->password}}</td>
                    <td> <a href="{{route('clientes.show',$cliente->id)}}"> <button class="btn-show"> Mostrar </button></a></td>
                    <td> <a href="{{route('clientes.edit',$cliente->id)}}"><button class="btn-edit"> Editar </button></a></td>
                    <td><form method="POST" action="{{route('clientes.destroy', $cliente->id) }}"  >
                            @method('DELETE')
                            @csrf
                            <a href=""><button class="btn-delete"> Borrar </button></a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
