@extends('layouts.cuerpo')

@section ('hijos')

Codigo de Empleado {{$empleado}}
Codigo de afiliado {{$afiliado}}
Nombre de afiliado {{$nombre}}

<h1>Lista de depositos</h1>
<a href= "/deposito/create/{{$empleado}}/{{$afiliado}}/{{$nombre}}" class="btn btn-success"> Crear Deposito</a>
<table class="table">
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
    @foreach ($depositos as $deposito)
<tr>
    <th>{{$deposito->id}}</th>
    <th>{{$deposito->cod_empleado}}</th>
    <th>{{$deposito->cod_afiliado}}</th>
    <th>{{$deposito->nombre_afiliado}}</th>
    <th>{{$deposito->fecha}}</th>
    <th>{{$deposito->cantidad}}</th>
    <th><a href="" class="btn btn-danger">Eliminar</a></th>
</tr>
@endforeach
</tbody>
</table>
@endsection