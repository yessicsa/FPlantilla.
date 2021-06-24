<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use App\Http\Request\Proveedor\StoreRequest;
use App\Http\Request\Proveedor\UpdateRequest;
class ProveedorController extends Controller
{
    public function index()
    {
        $proveedors = Proveedor::get();
        return view('admin.proveedor.index', compact('proveedors'));
    }

    public function create()
    {
        return view('admin.proveedor.create');
    }

    
    public function store(StoreRequest $request)
    {
        $proveedor = Proveedor::create($request->all());
        return redirect()->route('proveedors.index');
    }

    
    public function show(Proveedor $proveedor)
    {
        return view('admin.proveedor.show', compact('proveedor'));
    }

   
    public function edit(Proveedor $proveedor)
    {
        return view('admin.proveedor.show', compact('proveedor'));
    }

    
    public function update(UpdateRequest $request, Proveedor $proveedor)
    {
        $proveedor->update($request->all());
        return redirect()->route('proveedors.index');
    }

    
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedors.index');
    }
}

