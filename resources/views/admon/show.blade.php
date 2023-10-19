@extends('layouts.app')

@section('content')
<div class="boton-regresar2">
<a href="{{route('admon.index')}}" class="btn btn-primary" >Regresar</a>
</div>

<div class="container">
    <h2>Detalle de Usuario No.{{$admon->id}}</h2>
</div>

<div class="container d-flex flex-column">

    <h3>Usuario: <span>{{$admon->username}}</span></h3>
    <h6>Concepto: <span>{{$admon->correo}}</span></h6>
    <h6>Codigo_empleado: <span>#{{$admon->codigo_empleado}}</span></h6>
    <h6>Cantidad: <span>{{$admon->area}}</span></h6>
    <h6>Precio: <span>{{$admon->rol}}</span></h6>
</div>

@endsection
