@extends('layouts.cuerpo')

@section ('hijos')
codigo de empleado {{$empleado}}

<h1>Lista de Afiliados</h1>
<a href="\afiliado\create\{{$empleado}}" class="btn btn-success">Crear</a>
<table class="table">
    
<thead>

    <tr>
    <th>Codigo</th>
    <th>Nombre</th>
    <th>Apellido</th>     
    <th>Acción</th>
    <th>Acción</th>
    <th>Acción</th>
    </tr>

</thead>

<tbody>
    @foreach ($afiliados as $afiliado)
<tr>
    <th>{{$afiliado->id}}</th>
    <th>{{$afiliado->nombre}}</th>
    <th>{{$afiliado->apellido}}</th>
    <th><a href="/deposito/{{$empleado}}/{{$afiliado->id}}/{{$afiliado->nombre}}" class="btn btn-primary">Deposito</a></th>
    <th><a href="/retiro/{{$empleado}}/{{$afiliado->id}}/{{$afiliado->nombre}}" class="btn btn-primary">Retiro</a></th>
    <th><form action="{{ route('afiliado.destroy', $afiliado->id) }}" method="POST" style="display: inline;">
    <a href="{{ route('afiliado.show', $afiliado->id) }}" class="btn btn-danger">Eliminar</a>
    </form></th>
</tr>
@endforeach
</tbody>
</table>
@endsection