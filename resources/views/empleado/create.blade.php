@extends('layouts.cuerpo')

@section ('hijos')
<h1> Crear empleado</h1>

<div class="row">
        <div class="col">
    <form action = "/empleado" class="form-control" method="POST">
        @csrf

    
  <div class="mb-3">
    <label for=" " class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder="Juanita" name="nombre">
  </div>

  <div class="mb-3">
    <label for=" " class="form-label">Apellido</label>
    <input type="text" class="form-control" id="apellido" placeholder="Perez" name="apellido">
  </div>
 
  <div class="mb-3">
    <button type="submit" class="btn btn-primary" > Guardar </button>
    <a href="/empleado" class="btn btn-danger">Cancelar</a>
</div>  
</form>

@endsection

