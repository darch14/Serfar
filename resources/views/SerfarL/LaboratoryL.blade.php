@extends('SerfarL.principal')

@section('title', '- Laboratory')

@section('content')

  <div class="container marketing">
    <div class="text-center title ">
      Laboratorios
    </div>
    <hr class="style-eight">
    <div class="center">
      <br><p class="lead">
        Contamos con las mejores y las mas reconocidas marcas del pais, asi garantizamos la calidad de nuestros productos.
      </p><br>
    </div>

    <div class="row post center">
      @foreach($laboratory as $laboratory)
        @if (!empty($laboratory->lab_images))
          <div class="span3 center">
            <figure class="link-img">
              <div class="img-rounded img-border">
                <div class="img-block">
                  <img src="{{ asset('images/labs/'.$laboratory->lab_images->name) }}" alt="">
                </div>
              </div>
            </figure>
          </div>
        @endif
      @endforeach
    </div>

  </div>
  <div class="back-top up"><a href="#top"></a></div>

  <script type="text/javascript">
    $("#li-lab").attr("class","active");
  </script>
@endsection()
