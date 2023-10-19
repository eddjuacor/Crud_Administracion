@extends('layouts.app')

@section('content')
    <div>
        <h1>Gestion de usuarios</h1>
        <a href="{{route('admon.create')}}" class="btn btn-primary">Crear Nuevo</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Username</th>
                <th scope="col">Correo</th>
                <th scope="col">Codigo_empleado</th>
                <th scope="col">Area</th>
                <th scope="col">Rol</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($admon as $admon )

              <tr>
                <th scope="row">

                    <a href="#">{{$admon->username}}</a> <br />

                </th>
                <td>

                    <a href="#">{{$admon->correo}}</a><br />


                </td>
                <td>

                    <a href="#">{{$admon->codigo_empleado}}</a><br />

                </td>
                <td>

                    <a href="#">{{$admon->area}}</a><br />

                </td>
                <td>

                    <a href="#">{{$admon->rol}}</a><br />

                </td>
                <td class="botones">
                    <a href="{{route('admon.edit', $admon->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{route('admon.show', $admon->id)}}" class="btn btn-primary">Detalle</a>
                    <form method="POST" action="{{route('admon.destroy', $admon->id)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
                @empty
                    <p>no data</p>
                @endforelse

            </tr>
            </tbody>
          </table>
    </div>
@endsection
