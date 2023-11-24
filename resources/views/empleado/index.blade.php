
@extends('layouts.cuerpo')

@section ('hijos')
<h1>Lista empleados </h1>
    <a href="\empleado\create" class="btn btn-success">Crear</a>
<table class="table">
<thead>
    <tr>
    <th>Codigo</th>
    <th>Nombre</th>
    <th>Apellido</th>   
    <th>Accion</th>
    <th>Accion</th>  
    </tr>

</thead>

<tbody>
    @foreach ($empleados as $empleado)
<tr>
    <th>{{$empleado->id}}</th>
    <th>{{$empleado->nombre}}</th>
    <th>{{$empleado->apellido}}</th>
    <th><a href="\afiliado\{{$empleado->id}}" class="btn btn-primary">Afiliados</a></th>
    <th><form action="{{ route('empleado.destroy', $empleado->id) }}" method="POST" style="display: inline;">
    <a href="{{ route('empleado.show', $empleado->id) }}" class="btn btn-danger">Eliminar</a>
    </form></th>
</tr>
@endforeach
</tbody>
</table>
@endsection
