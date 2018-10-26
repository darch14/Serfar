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

      <hr class="featurette-divider">
      <h2>Laboratorios</h2>
      <div id="owl-demo">
        @foreach($laboratory as $laboratory)
        <div class="item"><img src="{{asset('images/labs/'.$laboratory->lab_images->name)}}" alt=""></div>
        @endforeach
      </div>

      <hr class="featurette-divider">

      <h2>Productos</h2>
      <div id="owl-productos">
        <div class="item"><img src="{{asset('images/prod/losartan.png')}}" alt="Losartan"></div>
        <div class="item"><img src="{{asset('images/prod/guantes_examen_latex.jpg')}}" alt="Guantes Examen Latex"></div>
        <div class="item"><img src="{{asset('images/prod/acetaminofen.jpg')}}" alt="acetaminofen"></div>
        <div class="item"><img src="{{asset('images/prod/glibenclamina.png')}}" alt="glibenclamina"></div>
        <div class="item"><img src="{{asset('images/prod/Acido.png')}}" alt="ácido acetilsalicílico"></div>
        <div class="item"><img src="{{asset('images/prod/sulfato-ferroso.png')}}" alt="sulfato ferroso"></div>
      </div>

      <!-- /END THE FEATURETTES -->
    </div>
    <script type="text/javascript">
      $("#li-ini").attr("class","active");
    </script>
@endsection()
