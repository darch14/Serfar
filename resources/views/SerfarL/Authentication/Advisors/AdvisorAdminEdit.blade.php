@extends('home')

@section('content')
  <br><br>
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading"><center><h4>Editar Asesor</h4></center></div>
    <div class="panel-body">

      <form class="" action="{{ route('AdvisorAdmin.update', $advisor->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="form-group">
          <label for="InputEmail1">Correo</label>
          <input type="email" name="email" class="form-control" placeholder="Correo" value="{{ $advisor->email }}" required>
        </div>
        <div class="form-group">
          <label for="InputName">Nombre</label>
          <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ $advisor->name }}" required>
        </div>
        <div class="form-group">
          <label for="InputLastName1">Primer Apellido</label>
          <input type="text" name="lastname1" class="form-control" placeholder="Primer Apellido" value="{{ $advisor->lastname1 }}" required>
        </div>
        <div class="form-group">
          <label for="InputLastName2">Segundo Apellido</label>
          <input type="text" name="lastname2" class="form-control" placeholder="Segundo Apellido" value="{{ $advisor->lastname2 }}">
        </div>
        <div class="form-group">
          <label for="InputPosition">Cargo</label>
          <input type="text" name="position" class="form-control" placeholder="Cargo" value="{{ $advisor->position }}" required>
        </div>
        <div class="form-group">
          <label for="InputNumber">Numero de Contacto</label>
          <input type="text" name="number" class="form-control" placeholder="Numero de Contacto" maxlength="11" value="{{ $advisor->number }}" required>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Foto</label>
          <input type="file" name="file">
          <p class="help-block">Subir la foto del asesor a registrar</p>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('AdvisorAdmin.index') }}" class="btn btn-danger">Cancelar</a>
      </form>
    </div>
  </div>
@endsection
