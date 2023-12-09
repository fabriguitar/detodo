<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function create()
    {
        return view('crearProductos');

    }

    public function store(Request $request)
    {
      $nvoProducto = new Producto();

      $nvoProducto-> descripcion = $request->input('descripcion');
      $nvoProducto->precio = $request->input('precio');
      $nvoProducto->stock = $request->input('stock');
      $nvoProducto->pagaIsv = $request->input('pagaIsv');

      $nvoProducto->save();

      return redirect()->route('productos.inicio');

    }

    public function index()
    {
        $productos = Producto::all();
        return view('productos',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
