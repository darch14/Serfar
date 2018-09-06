@extends('home')

@section('content')
  <br><br>
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading"><center><h4>Editar Asesor</h4></center></div>
    <div class="panel-body">
      <form class="" action="{{route('Advisor.update')}}" role="form" method="PUT|PATCH" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="InputEmail1">Correo</label>
          <input type="email" name="email" class="form-control" placeholder="Correo" required>
        </div>
        <div class="form-group">
          <label for="InputName">Nombre</label>
          <input type="text" name="name" class="form-control" placeholder="Nombre" required>
        </div>
        <div class="form-group">
          <label for="InputLastName1">Primer Apellido</label>
          <input type="text" name="lastname1" class="form-control" placeholder="Primer Apellido"required>
        </div>
        <div class="form-group">
          <label for="InputLastName2">Segundo Apellido</label>
          <input type="text" name="lastname2" class="form-control" placeholder="Segundo Apellido">
        </div>
        <div class="form-group">
          <label for="InputNumber">Numero de Contacto</label>
          <input type="text" name="telefono" class="form-control" placeholder="Numero de Contacto" maxlength="11" required>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Foto</label>
          <input type="file" name="file">
          <p class="help-block">Subir la foto del asesor a registrar</p>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
    </div>
  </div>
@endsection
