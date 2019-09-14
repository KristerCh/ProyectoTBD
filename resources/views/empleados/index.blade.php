@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-sm">

<a class="btn btn-success" href="{{ url('/empleados/create') }}">Nuevo empleado</a>

  <form class="form-inline" method="GET" action="{{ url('/empleados/index') }}">

    <input class="form-control mr-sm-2" name="busca" type="text" placeholder="Search">
    <button type="submit" class="btn btn-outline-success">Busqueda</button>

  </form>

</nav>


<br>

  <!-- Tabla de contenido -->

  <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Telefono</th>
              <th scope="col">Correo</th>
              <th scope="col">Calle</th>
              <th scope="col">Ciudad</th>
              <th scope="col">Departamento</th>
              <th scope="col">Colonia</th>
              <th colspan="2" scope="col">Accion</th>
            </tr>
          </thead>
          <tbody>
              @foreach($empleados as $empleado)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{ $empleado->nombre}}</td>
              <td>{{ $empleado->apellido}}</td>
              <td>{{ $empleado->telefono}}</td>
              <td>{{ $empleado->email}}</td>
              <td>{{ $empleado->calle}}</td>
              <td>{{ $empleado->ciudad}}</td>
              <td>{{ $empleado->departamento}}</td>
              <td>{{ $empleado->colonia}}</td>
              <td>Editar | Borrar</td>
            </tr>
            @endforeach
            
        </table>

@endsection