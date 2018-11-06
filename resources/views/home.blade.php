<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('images/logos/favicon.png')}}" type="img/x-icon"/>
    <link rel="shortcut icon" href="{{asset('images/logos/favicon.png')}}" type="img/x-icon"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    @yield('link')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Serfar') }}</title>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><img alt="Brand" src="{{asset('images/logos/favicon.png')}}"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a></li>
              </ul>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Equipo Humano <span class="caret"></span></a>
              <ul class="nav dropdown-menu">
                <li> <a href="{{route('AdvisorAdmin.index')}}">Listado de Equipo Humano</a> </li>
                <li> <a href="{{route('AdvisorAdmin.create')}}">Registrar Equipo Humano</a> </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Laboratorios <span class="caret"></span></a>
              <ul class="nav dropdown-menu">
                <li> <a href="{{route('LaboratoryAdmin.index')}}">Listado de Laboratorios</a> </li>
                <li> <a href="{{route('LaboratoryAdmin.create')}}">Registrar laboratorio</a> </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Marcas <span class="caret"></span></a>
              <ul class="nav dropdown-menu">
                <li> <a href="{{route('BrandAdmin.index')}}">Listado de Marcas</a> </li>
                <li> <a href="{{route('BrandAdmin.create')}}">Registrar Marca</a> </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Catalogo <span class="caret"></span></a>
              <ul class="nav dropdown-menu">
                <li> <a href="{{route('ProductAdmin.index')}}">Listado de Catalogos</a> </li>
                <li> <a href="{{route('ProductAdmin.create')}}">Registrar Producto</a> </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Excel <span class="caret"></span></a>
              <ul class="nav dropdown-menu">
                <li> <a href="{{route('ProductExport.index')}}">Exportar</a> </li>
                <li> <a href="">Importar</a> </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          @yield('content')
        </div>
      </div>
    </div>
    <!-- Contenido -->

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>
    @yield('script')
  </body>
</html>
