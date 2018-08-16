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
      @for ($i = 1; $i <= 67; $i++)

        <div class="span3 center">
          <figure class="link-img">
            <div class="img-rounded img-border">
              <div class="img-block">
                <img src="{{asset('images/labs/'.$i.'.jpg')}}" alt="">
              </div>
            </div>
          </figure>
        </div>

      @endfor
    </div>

  </div>
  <div class="back-top up"><a href="#top"></a></div>

  <script type="text/javascript">
    $("#li-lab").attr("class","active");
  </script>
@endsection()
