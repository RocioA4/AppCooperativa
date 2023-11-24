<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposito;

class DepositoController extends Controller
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
        
        $datosDepositos=Deposito::all();
        return view('deposito.index')->with('depositos', $datosDepositos)->with('empleado',$empleados)
        ->with('afiliado',$afiliados)->with('nombre',$nafiliados);
     
    }

    /**
     * Show the form for creating a new resource.
     */
  
     public function create(string $empleado, string $afiliado,string $nombre)
     {
         $empleados=$empleado;
         $afiliados=$afiliado;
         $nafiliados=$nombre;
         return view('deposito.create')->with('empleado',$empleados) ->with('afiliado',$afiliados)
         ->with('nombre',$nafiliados);
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $deposito=new Deposito();
        $deposito->cod_empleado=$request->get('cod_empleado');
        $deposito->cod_afiliado=$request->get('cod_afiliado');
        $deposito->nombre_afiliado=$request->get('nombre_afiliado');
        $deposito->fecha=$request->get('fecha');
        $deposito->cantidad=$request->get('cantidad');

        $deposito->save();

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
