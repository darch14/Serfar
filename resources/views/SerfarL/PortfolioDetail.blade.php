@extends('SerfarL.principal')

@section('title', '- Portafolio')

@section('content')
  {{-- <div class="up">
    <ol class="breadcrumb">
      <li><a href="">Inicio</a></li>
      <li><a href="">Portafolio</a></li>
      <li class="active">Resultado de Busqueda</li>
    </ol>
  </div> --}}
  <div class="container marketing">
    <div class="text-center title ">
      {{$product->name}}
    </div>
    <hr class="style13">
    <br>
    <div class="row">
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <img src="{{ asset('images/prod/'.$product->pro_image->name) }}" class="img-responsive" alt="">
      </div>
      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
        <span class="move-item icon-7 move-bg-icon-xs"></span>
        <h2 class="text-center title-span text-primary"><em>Información del Producto</em></h2>
        <hr>
        <dl class="dl-horizontal">
          <dt>Referencia: </dt><dd>{{$product->reference}}</dd>
          <dt>Reg. sanitario INVIMA: </dt><dd>{{$product->invima}}</dd>
          <dt>Unidad de Venta: </dt><dd>{{$product->unit}}</dd>
          <dt>Descripción: </dt><dd>{{$product->description}}</dd>
          <dt>Uso Terapéutico: </dt><dd>{{$product->use}}</dd>
        </dl>
      </div>
    </div>
    <hr class="style13">
  </div>
@endsection
