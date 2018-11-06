@extends('home')

@section('content')
  <br><br>
  <div class="panel panel-default"">
    <div class="panel-heading"><center><h4>Listado de Personal</h4></center></div>
  </div>
  <table class="table table-striped" style="text-align: center;">
    <thead>
      <th style="text-align: center;">ID</th>
      <th style="text-align: center;">Nombre</th>
      <th style="text-align: center;">Cargo</th>
      <th style="text-align: center;">Correo</th>
      <th style="text-align: center;">Telefono</th>
      <th style="text-align: center;">Imagen</th>
      <th style="text-align: center;">Acción</th>
    </thead>
    <tbody>
      @foreach ($advisor as $advisor)
        <tr>
          <td>{{ $advisor->id }}</td>
          <td>{{ $advisor->name . ' ' . $advisor->lastname1 . ' ' . $advisor->lastname2 }}</td>
          <td>{{ $advisor->position }}</td>
          <td>{{ $advisor->email }}</td>
          <td>{{ $advisor->number }}</td>
          <td>
          @empty(!$advisor->images)
            <img src="{{ asset('images/asesores/'.$advisor->images->name) }}" class="img-rounded" width="80px" height="100px">
          @endempty

          </td>
          <td>
            <a href="{{ route('AdvisorAdmin.edit', $advisor->id) }}" class="btn btn-warning">
              <span class="glyphicon glyphicon-pencil" ></span>
            </a>
            <a href="{{ route('AdvisorDestroy', $advisor->id) }}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger">
              <span class="glyphicon glyphicon-trash" ></span>
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
