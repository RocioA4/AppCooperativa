@extends('layouts.cuerpo')

@section ('hijos')

Codigo de Empleado {{$empleado}}
Codigo de afiliado {{$afiliado}}
Nombre de afiliado {{$nombre}}

<h1>Lista de retiros</h1>
<a href= "/retiro/create/{{$empleado}}/{{$afiliado}}/{{$nombre}}" class="btn btn-success"> Crear Retiro</a>
<table class="table" >
<thead>
    <tr>
    <th>Codigo</th>
    <th>Empleado</th>
    <th>Cod_Afiliado</th>   
    <th>Afiliado</th>   
    <th>Fecha</th>
    <th>Cantidad</th> 
    <th>Acción</th>       
    </tr>

</thead>

<tbody>
    @foreach ($retiros as $retiro)
<tr>
    <th>{{$retiro->id}}</th>
    <th>{{$retiro->cod_empleado}}</th>
    <th>{{$retiro->cod_afiliado}}</th>
    <th>{{$retiro->nombre_afiliado}}</th>
    <th>{{$retiro->fecha}}</th>
    <th>{{$retiro->cantidad}}</th>
    <th><a href="" class="btn btn-danger">Eliminar</a></th>
</tr>
@endforeach
</tbody>
</table>
@endsection