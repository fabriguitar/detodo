<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {    $empleados = Empleado::all();
        return view('empleados', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('crearEmpleados');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nvoEmpleado = new Empleado();

      $nvoEmpleado-> idprestamo = $request->input('idprestamo');
      $nvoEmpleado->nombre = $request->input('nombre');
      $nvoEmpleado->apellido = $request->input('apellido');
      $nvoEmpleado->fechaingreso = $request->input('fechaingreso');
      $nvoEmpleado->salario = $request->input('salario');

      $nvoEmpleado->save();

      return redirect()->route('empleados.inicio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
