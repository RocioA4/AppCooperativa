<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datosEmpleados=Empleado::all();
        return view('empleado.index')->with('empleados', $datosEmpleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $empleado= new Empleado ();
        $empleado-> nombre=$request->get('nombre');
        $empleado-> apellido=$request->get('apellido');
        $empleado->save();

        return redirect ('empleado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $empleado = Empleado::find($id);
        return view('empleado.delete', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $empleado = Empleado::find($id);
        $empleado->delete();
    
        return redirect()->route('empleado.index')
            ->with('success', 'Empleado eliminado exitosamente.');
    }
}
