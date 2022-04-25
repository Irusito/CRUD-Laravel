<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes =Cliente::all();
        return view("clientes",["clientes"=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("clientes_create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        // recojo el contenido del formulario del .create
        $cliente = new Cliente($request->input());
        // guardar el nuevo cliente
        $cliente->SaveOrFail();
        // mostrar
        $clientes =Cliente::all();
        return view("clientes",["clientes"=>$clientes]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //dd($cliente) //como un var_dump más completo de laravel
        //echo "<h1> estoy en show del cliente ".$cliente->nombre."</h1>";
        return view("clientes_show",["cliente"=>$cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
        return view("clientes_update",["cliente"=>$cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClienteRequest  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        // request son los nuevos datos del cliente y $cliente los antiguos

        // modificar el cliente
        $cliente->update($request->input());

        // mostrar clientes (con el modificado)
        $clientes =Cliente::all();
        return view("clientes",["clientes"=>$clientes]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {

        // borrar el cliente
        $cliente->delete();
        // mostrar clientes (con el modificado)
        $clientes =Cliente::all();
        return view("clientes",["clientes"=>$clientes]);
    }
}
