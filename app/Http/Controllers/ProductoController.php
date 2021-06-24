<?php

namespace App\Http\Controllers;

use App\Category;
use App\Producto;
use Illuminate\Http\Request;
use App\Http\Request\Producto\StoreRequest;
use App\Http\Request\Producto\UpdateRequest;
use App\Proveedor;

class ProductoController extends Controller
{
   
    public function index()
    {
        $productos = Producto::get();
        return view('admin.producto.index', compact('productos'));
    }

    public function create()
    {
        $categories = Category::get();
        $proveedors = Proveedor::get();
        return view('admin.producto.create', compact('categories','proveedors'));
    }

    public function store(Request $request)
    {
        $producto = Producto::create($request->all());
        return redirect()->route('productos.index');
    }

    public function show(Producto $producto)
    {
        return view('admin.producto.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        $categories = Category::get();
        $proveedors = Proveedor::get();
        return view('admin.producto.show', compact('producto','categories','proveedors'));
    }

    public function update(Request $request, Producto $producto)
    {
        $Producto->update($request->all());
        return redirect()->route('productos.index');
    }

 
    public function destroy(Producto $producto)
    {
        $Producto->delete();
        return redirect()->route('productos.index');
    }
}
