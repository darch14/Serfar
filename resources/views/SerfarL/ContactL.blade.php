@extends('SerfarL.principal')

@section('title','- About-us')

@section('content')
  <div class="container">
    <div class="text-center title ">
      Contactenos
    </div><br><br>
    {{ csrf_field() }}
    <form class="" action="/ContactL" method="post">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombre">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Empresa">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Correo">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Telefono">
          </div>
          <!--<div class="form-group">
            <input type="text" class="form-control" placeholder="Text input">
          </div>-->
        </div>
        <div class="col-md-6">
          <textarea class="form-control" rows="4" placeholder="Descripción"></textarea>
        </div>
      </div>
      <input type="submit" class="btn btn-primary" value="Enviar">
    </form>
  </div>
@endsection
