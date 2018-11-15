@extends('SerfarL.principal')

@section('title', '- Portafolio')

@section('content')
  <div class="container marketing">
    <div class="text-center title ">
      Portafolio
    </div>
    <hr class="style-eight">
    <div class="center">
      <br><p class="lead">
        Contamos con las mejores y las mas reconocidas marcas del pais, asi garantizamos la calidad de nuestros productos.
      </p><br>
    </div>

    <div class="row center">
      @foreach($product as $product)
        @if (!empty($product->pro_image))
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <img src="{{ asset('images/prod/'.$product->pro_image->name) }}" alt="">
                <div class="caption">
                  <h3>{{$product->name}}</h3>
                  <p>...</p>
                  <p><a href="{{ route('portfolio.edit', $product->id) }}" class="btn btn-primary btn-block" role="button">
                    <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                    saber mas
                  </a></p>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>
@endsection
