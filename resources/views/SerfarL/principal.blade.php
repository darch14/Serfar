<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="footer, address, phone, icons" />
    <title>Serfar Ltda @yield('title')</title>
    <link rel="icon" href="{{asset('images/logos/favicon.png')}}" type="img/x-icon"/>
    <link rel="shortcut icon" href="{{asset('images/logos/favicon.png')}}" type="img/x-icon"/>
    <!-- Bootstrap Style -->
    <!-- Bootstrap core CSS-->
    <link href="{{asset('css/bootstrap/bootstrap.css')}}" rel="stylesheet">
    <!-- Owl Carousel core CSS -->
    <link href="{{asset('css/owl-carousel/owl-carousel.css')}}" rel="stylesheet">
    <!-- Footer core CSS-->
    <link rel="stylesheet" href="{{asset('css/footer/footer-distributed-with-address-and-phones.css')}}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
    <!-- Style Serfar -->
    <link href="{{asset('css/styleS.css')}}" rel="stylesheet">
    @yield('style')
  </head>
  <body>
    <!-- Navbar -->
    @if ($nav != "portafolio" and $nav != "contact")
      <div id="navbar-carousel">
        <div class="navbar-wrapper">
          <div class="container">
            <nav class="navbar navbar-inverse navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" {{-- href="{{route('Swelcome')}}" --}}>
                    <img src="{{asset('images/logos/favicon.png')}}">
                  </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav" id="lista_navbar">
                    <li id="li-ini"><a href="{{route('routeHome')}}">Inicio</a></li>
                    <li id="li-med"><a href="{{route('Portfolio')}}">Portafolio</a></li>
                    <li id="li-lab"><a href="{{route('Laboraty')}}">Laboratorios</a></li>
                    <li id="li-hum"><a href="{{route('HumanL')}}">Equipo humano</a></li>
                    <li id="li-qui"><a href="{{route('Aboutus')}}">Quienes somos</a></li>
                    <li id="li-con"><a href="{{route('ContactL')}}">Contacto</a></li>
                  </ul>
                </div>
              </div>
            </nav>

          </div>
        </div>
      </div>
    @else
      <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" {{-- href="{{route('Swelcome')}}" --}}>
              <img src="{{asset('images/logos/favicon.png')}}">
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="lista_navbar">
              <li id="li-ini"><a href="{{route('routeHome')}}">Inicio</a></li>
              <li id="li-med"><a href="{{route('Portfolio')}}">Portafolio</a></li>
              <li id="li-lab"><a href="{{route('Laboraty')}}">Laboratorios</a></li>
              <li id="li-hum"><a href="{{route('HumanL')}}">Equipo humano</a></li>
              <li id="li-qui"><a href="{{route('Aboutus')}}">Quienes somos</a></li>
              <li id="li-con"><a href="{{route('ContactL')}}">Contacto</a></li>
            </ul>
          </div>
        </div>
      </nav>
    @endif

    <!-- Fin Navbar -->

    <!-- Carousel
    ================================================== -->
    @if ($nav != "portafolio" and $nav != "contact")
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          @if ($validIndex == "SI")
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
          @endif
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide" src="{{$fondo1}}" alt="First slide">
          </div>
          @if ($validIndex != "SI")
            <div class="carousel-caption">
              <h3 class="h3-responsive">@yield('breadcrumbs')</h3>
            </div>
          @endif
          @if ($validIndex == "SI")
            <div class="item">
              <img class="second-slide" src="{{asset('images/fondos/fondoSerfar2.png')}}" alt="Second slide">
            </div>
            <div class="item">
              <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            </div>
          @endif
        </div>
        @if ($validIndex == "SI")
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        @endif
      </div>
    @endif
    <!-- /.carousel -->

    <!-- Contenido -->
    @yield('content');
    <!-- Fin Contenido -->

    <!-- Footer -->
    <footer class="footer-distributed">
      <div class="footer-left">

        <h3>
          <img src="{{asset('images/logos/logoS.png')}}" alt="logo" height="60px">
        </h3>

        <p class="footer-links">
          <a>Inicio</a>
          ·
          <a>Productos</a>
          ·
          <a>Laboratorios</a>
          ·
          <a>Contactos</a>
        </p><br>
        <p class="footer-company-about">
          Medicamentos en General <br>
          Hospitalarios <br>
          Médicas <br>
          Médico
        </p>


        <p class="footer-company-name"><br>2015 &copy; Serfar Ltda </p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Cll 91 #46 - 141</span> Colombia, Barranquilla</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>3100330 - 310 413 0082</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:servicioalclienteserfar@gmail.com">servicioalclienteserfar@gmail.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>Sobre La Empresa</span>
          dedicada a la prestación de servicios de atención farmacéutica, suministros, comercialización y
          distribución de medicamentos e insumos hospitalarios a las entidades de salud.
          <br><br>
          Jer. 33:6 - ...Y, yo les traeré sanidad y medicina; y los curaré.
        </p>
      </div>
    </footer>
    <!-- Fin Footer -->

    <!-- Bootstrap JS-->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('js/owl-carousel/owl-carousel.js')}}"></script>
    <script src="{{asset('js/principal.js')}}"></script>
    @yield('script')
  </body>
</html>
