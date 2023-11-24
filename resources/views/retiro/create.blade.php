
@extends('layouts.cuerpo')

@section ('hijos')
<h1> Crear Retiro</h1>

<div class="row">
        <div class="col">
    <form action = "/retiro" class="form-control" method="POST">
        @csrf

<form action="">
    <div class="mb-3">
    <label for="">Codigo Empleado</label>
    <input type="text" name="cod_empleado" id="cod_empleado" value="{{$empleado}}">
    </div>

    <div class="mb-3">
    <label for="">Codigo Afiliado</label>
    <input type="text" name="cod_afiliado" id="cod_afiliado" value="{{$afiliado}}">
    </div>

    <div class="mb-3">
    <label for="">Nombre Afiliado</label>
    <input type="text" name="nombre_afiliado" id="nombre_afiliado" value="{{$nombre}}">
    </div>

    <div class="mb-3">
    <label for="">Fecha</label>
    <input type="text" name="fecha" id="Fecha">
    </div>

    <div class="mb-3">
    <label for="">Cantidad</label>
    <input type="text" name="cantidad" id="Cantidad">
    </div>

    <button type="submit" class="btn btn-primary" > Guardar </button>
    <a href="/empleado" class="btn btn-danger">Cancelar</a>
</form>

@endsection

