@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('admon.index')}}" class="btn btn-primary">Regresar</a>
</div>
    <div class="container" >
    <form method="POST" action="{{route('admon.update', $admon->id)}}">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label class="form-label">Username:</label>
            <input type="text" class="form-control" name="username" value="{{$admon->username}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Correo:</label>
            <input type="text" class="form-control" name="correo" value="{{$admon->correo}}">
        </div>


        <div class="mb-3">
            <label class="form-label">Codigo_empleado:</label>
            <input type="text" class="form-control" name="codigo_empleado" value="{{$admon->codigo_empleado}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Area:</label>
            <select type="text" class="form-control" name="area" value="{{$admon->area}}">
                <option>--Seleccione--</option>
                <option>Recursos Humanos</option>
                <option>Recepcion</option>
                <option>Contabilidad</option>
                <option>Ventas</option>
                <option>Produccion</option>
            </select>

            <div class="mb-3">
                <label class="form-label">Rol:</label>
                <select type="text" class="form-control" name="rol" value="{{$admon->rol}}">
                    <option>--Seleccione--</option>
                    <option>Gerente</option>
                    <option>Coordinador</option>
                    <option>Supervisor</option>
                    <option>Empleado</option>
                </select>
            </div>

        <input type="submit" value="Actualizar" class="btn btn-success">
    </form>
    </div>
@endsection
