@extends('SerfarL.principal')

@section('title', '- Portafolio')

@section('content')
  <div class="container marketing">
    <div class="text-center title ">
      {{$product->name}}
    </div>
    <hr>
    <br>
    <div class="row">
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <img src="{{ asset('images/prod/'.$product->pro_image->name) }}" class="img-responsive" alt="">
      </div>
      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
        <span class="move-item icon-7 move-bg-icon-xs"></span>
        <h2 class="text-center title-span">Información del Producto</h2>
        <hr>
        <p class="lead">
          <strong>Referencia: </strong>{{$product->reference}} <br>
          <strong>Registro sanitario INVIMA: </strong>{{$product->invima}} <br>
          <strong>Descripción: </strong>{{$product->description}} <br>
          <strong>Uso Terapéutico: </strong>{{$product->use}} <br>
          <strong>Unidad de Venta: </strong>{{$product->unit}} <br>
        </p>
      </div>
    </div>
  </div>
@endsection
