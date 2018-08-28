@extends('home')

@section('content')
  <br><br>
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading"><center><h4>Registrar Asesor</h4></center></div>
    <div class="panel-body">
      <form class="" action="index.html" method="post">
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
          <input type="text" name="Number" class="form-control" placeholder="Numero de Contacto"required>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Foto</label>
          <input type="file" name="file" id="InputFile" required>
          <p class="help-block">Subir la foto del asesor a registrar</p>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
  </div>
@endsection
