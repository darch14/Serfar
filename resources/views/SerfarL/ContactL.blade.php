@extends('SerfarL.principal')

@section('title','- About-us')

@section('content')
  <div class="container">
    <div class="text-center title ">
      Contacte con Nosotros
    </div><br><br>
    @include('fragment.error')
    <form class="" action="/ContactL" role="form" method="post">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" name="nombre"  placeholder="nombre">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="empresa"  placeholder="empresa">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="correo"  placeholder="correo">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="telefono"  placeholder="telefono">
          </div>
          <!--<div class="form-group">
            <input type="text" class="form-control" placeholder="Text input">
          </div>-->
        </div>
        <div class="col-md-6">
          <div class="form-group">
            Asunto:
            <select class="form-control" name="Asunto">
              <option value="Servicio al cliente">Servicio al cliente</option>
              <option value="Ventas">Ventas</option>
            </select>
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="4" name="mensaje"  placeholder="Descripción"></textarea>
          </div>
        </div>
      </div>
      <input id="enviar" type="submit" class="btn btn-primary" value="Enviar">
    </form>
  </div>
@endsection
