<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retiro;

class RetiroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $empleado, string $afiliado,string $nombre)
    {
        //
        $empleados=$empleado;
        $afiliados=$afiliado;
        $nafiliados=$nombre;
        
        $datosRetiros=Retiro::all();
        return view('retiro.index')->with('retiros', $datosRetiros)->with('empleado',$empleados)
        ->with('afiliado',$afiliados)->with('nombre',$nafiliados);
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $empleado, string $afiliado,string $nombre)
    {
        //
        $empleados=$empleado;
        $afiliados=$afiliado;
        $nafiliados=$nombre;
        
        return view('retiro.create')->with('empleado',$empleados)
        ->with('afiliado',$afiliados)->with('nombre',$nafiliados);
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $retiro=new Retiro();
        $retiro->cod_empleado=$request->get('cod_empleado');
        $retiro->cod_afiliado=$request->get('cod_afiliado');
        $retiro->nombre_afiliado=$request->get('nombre_afiliado');
        $retiro->fecha=$request->get('fecha');
        $retiro->cantidad=$request->get('cantidad');

        $retiro->save();

        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    }
}
