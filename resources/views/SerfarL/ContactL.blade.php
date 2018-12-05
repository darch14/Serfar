@extends('SerfarL.principal')

@section('title','- About-us')

@section('breadcrumbs')
  <ol class="breadcrumb breadcrumb-state">
    <li><a href="{{route('routeHome')}}">Inicio</a></li>
    <li class="active">Contacto</li>
  </ol>
@endsection

@section('content')
  <div class="container">
    <div class="text-center title title-span">
      Contacte con Nosotros
    </div><hr class="style13"><br><br>
    @include('fragment.error')
    <form class="" action="/ContactL" role="form" method="post">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}" placeholder="nombre">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="empresa" value="{{old('empresa')}}" placeholder="empresa">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="correo" value="{{old('correo')}}" placeholder="correo">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="telefono" value="{{old('telefono')}}" placeholder="telefono">
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
            <textarea class="form-control" rows="4" name="mensaje"  placeholder="Descripción">{{old('Descripción')}}</textarea>
          </div>
        </div>
      </div>
      <input id="enviar" type="submit" class="btn btn-primary" value="Enviar">
    </form>
  </div>
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $("#li-ini").removeAttr("class");
      $("#li-med").removeAttr("class");
      $("#li-lab").removeAttr("class");
      $("#li-hum").removeAttr("class");
      $("#li-qui").removeAttr("class");
      $("#li-con").attr("class","active");
    });
  </script>
@endsection
