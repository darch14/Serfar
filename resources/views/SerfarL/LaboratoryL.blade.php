@extends('SerfarL.principal')

@section('title', '- Laboratory')

@section('breadcrumbs')
  <ol class="breadcrumb breadcrumb-state">
    <li><a href="{{route('routeHome')}}">Inicio</a></li>
    <li class="active">Laboratorios</li>
  </ol>
@endsection

@section('content')

  <div class="container marketing">
    <div class="text-center title ">
      Laboratorios
    </div>
    <hr class="style13">
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
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $("#li-ini").removeAttr("class");
      $("#li-med").removeAttr("class");
      $("#li-lab").attr("class","active");
      $("#li-hum").removeAttr("class");
      $("#li-qui").removeAttr("class");
      $("#li-con").removeAttr("class");
    });
  </script>
@endsection
