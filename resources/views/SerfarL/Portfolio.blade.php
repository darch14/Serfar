@extends('SerfarL.principal')

@section('title', '- Portafolio')

@section('breadcrumbs')
  <ol class="breadcrumb breadcrumb-state">
    <li><a href="{{route('routeHome')}}">Inicio</a></li>
    <li class="active">Portafolio</li>
  </ol>
@endsection

@section('content')
  <div class="container marketing">
    <div class="text-center title ">
      Portafolio
    </div>
    <hr class="style13">
    <div class="center">
      <br><p class="lead">
        Contamos con las mejores y las mas reconocidas marcas del pais, asi garantizamos la calidad de nuestros productos.
      </p><br>
    </div>

    <div class="row center">
      @foreach($product as $product)
        @if (!empty($product->pro_image))
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="{{ asset('images/prod/'.$product->pro_image->name) }}" alt="">
              <div class="caption">
                <h3 class="text-capitalize">{{$product->name}}</h3>
                <p><a href="{{ route('PortfolioDetail', $product->id) }}" class="btn btn-primary btn-block" role="button">
                  <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                  saber mas
                </a></p>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>

  </div>
@endsection
