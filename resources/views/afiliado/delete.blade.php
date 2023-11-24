@extends('layouts.cuerpo')

@section ('hijos')
<h1> Eliminar afiliado</h1>
<form action="{{ route('afiliado.destroy', $afiliado->id) }}" method="POST">
    @csrf
    @method('DELETE')

  <div class="mb-3">
    <label for=" " class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" value="{{ $afiliado->nombre }}" name="nombre" readonly>
  </div>

  <div class="mb-3">
    <label for=" " class="form-label">Apellido</label>
    <input type="text" class="form-control" id="apellido" value="{{ $afiliado->apellido }}" name="apellido" readonly>
  </div>

    <button type="submit" class="btn btn-danger">Eliminar</button>
    <a href="{{ route('afiliado.index') }}" class="btn btn-warning">Cancelar</a>
</form>
@endsection