<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Request\Cliente\StoreRequest;
use App\Http\Request\Cliente\UpdateRequest;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::get();
        return view('admin.cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('admin.cliente.create');
    }

    
    public function store(StoreRequest $request)
    {
        $cliente = Cliente::create($request->all());
        return redirect()->route('clientes.index');
    }

    
    public function show(Cliente $cliente)
    {
        return view('admin.cliente.show', compact('cliente'));
    }

   
    public function edit(Cliente $cliente)
    {
        return view('admin.cliente.show', compact('cliente'));
    }

    
    public function update(UpdateRequest $request, Cliente $cliente)
    {
        $Cliente->update($request->all());
        return redirect()->route('clientes.index');
    }

    
    public function destroy(Cliente $cliente)
    {
        $Cliente->delete();
        return redirect()->route('clientes.index');
    }
   
}
