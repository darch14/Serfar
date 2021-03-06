@extends('SerfarL.principal')

@section('title', '| Servicios Farmaceuticos')

@section('content')
  <div class="container marketing">
      <!-- jumbotron -->
      <div class="jumbotron">
        <h1><font color="#1C8AF2">
          <b><i>Bienvenidos a Serfar</i></b>
        </font></h1>
        <h3><b>¡Su Salud, Nuestro Compromiso!</b></h3>
        <p class="lead">
          Nuestro proposito es la promoción, prevención y recuperación de la salud individual
          o colectiva de nuestros usuarios basados en el uso racional de los medicamentos
        </p>
      </div><!-- /.jumbotron -->

      <div class="row">
        <div class="col-lg-3 link-block">
          <span class="move-item icon-1 move-bg-icon"></span>
          <h2>Productos</h2>
          <p>Mas de 1.500 referencias de los laboratorios mas reconocidos a nivel nacional.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3 link-block">
          <span class="move-item icon-2 move-bg-icon"></span>
          <h2>Nuestra Sede</h2>
          <p>Nuestra sede cuenta con las normas de calidad mas altas y una estructura solida que garantiza una logistica oportuna.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3 link-block">
          <span class="move-item icon-3 move-bg-icon"></span>
          <h2>Servicios</h2>
          <p>Distribuimos y comercializamos medicamentos y material medico-quirurgico a nivel nacional. Dispensacion y entrega de medicamentos a EPS en forma directa o tercerizada</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3 link-block">
          <span class="move-item icon-4 move-bg-icon"></span>
          <h2>Contáctenos</h2>
          <p>Nuestro horario de atención a clientes es de lunes a viernes de 8:00 am a 6:00 pm </p>
        </div><!-- /.col-lg-4 -->
      </div>

      @if (count($laboratory) != 0)
        <hr class="featurette-divider">
        <h2>Laboratorios</h2>
        <div id="owl-demo">
          @foreach($laboratory as $laboratory)
            <div class="item"><img src="{{asset('images/labs/'.$laboratory->lab_images->name)}}" alt=""></div>
          @endforeach
        </div>
      @endif

      @if (count($product) != 0)
        <hr class="featurette-divider">
        <h2>Productos</h2>
        <div id="owl-productos">
          @foreach($product as $product)
            <div class="item"><img src="{{asset('images/prod/'.$product->pro_image->name)}}" width="206" height="130" alt="Losartan"></div>
          @endforeach
        </div>
      @endif

      <!-- /END THE FEATURETTES -->
    </div>
@endsection()
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $("#li-ini").attr("class","active");
      $("#li-med").removeAttr("class");
      $("#li-lab").removeAttr("class");
      $("#li-hum").removeAttr("class");
      $("#li-qui").removeAttr("class");
      $("#li-con").removeAttr("class");
    });
  </script>
@endsection
