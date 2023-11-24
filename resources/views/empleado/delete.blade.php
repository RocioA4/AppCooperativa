@extends('layouts.cuerpo')

@section ('hijos')
<h1> Eliminar empleado</h1>
<form action="{{ route('empleado.destroy', $empleado->id) }}" method="POST">
    @csrf
    @method('DELETE')

  <div class="mb-3">
    <label for=" " class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" value="{{ $empleado->nombre }}" name="nombre" readonly>
  </div>

  <div class="mb-3">
    <label for=" " class="form-label">Apellido</label>
    <input type="text" class="form-control" id="apellido" value="{{ $empleado->apellido }}" name="apellido" readonly>
  </div>

    <button type="submit" class="btn btn-danger">Eliminar</button>
    <a href="{{ route('empleado.index') }}" class="btn btn-warning">Cancelar</a>
</form>
@endsection
