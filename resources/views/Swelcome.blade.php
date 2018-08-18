<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Serfar</title>
    <link rel="icon" href="{{asset('images/logos/favicon.png')}}" type="img/x-icon"/>
    <link rel="shortcut icon" href="{{asset('images/logos/favicon.png')}}" type="img/x-icon"/>
    <!-- Bootstrap Style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('css/welcomeCss.css')}}">
  </head>
  <body>

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class=" header masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">
                <img src="{{asset('images/logos/logoS.png')}}" alt="logo" height="50px">
              </h3>
              <!--<nav>
                <ul class="nav masthead-nav">
                  <li class="active" id="Home_btn" ><a href="#">Home</a></li>
                  <li id="Contact_btn">
                    <a href="#" id="linkContact" >Contact</a>
                  </li>
                </ul>
              </nav>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="rwd_col1">
        <a href="{{route('routeHome')}}" class="">
          <img src="{{asset('images/logos/logoInicio.png')}}" alt="Serfar Ltda" class="rounded-circle img-SL imagen" width="200px" height="200px" style="border: double;">
        </a>
      </div>
      <div class="rwd_col2">
        <a href="#" class="">
          <img src="{{asset('images/logos/logoInicioIPS.png')}}" alt="Serfar IPS" class="rounded-circle img-IPS imagen" width="200px" height="200px" style="border: double;">
        </a>
      </div>
    </div>
    <!-- Modal -->
    <!--<div class="modal fade" id="ContactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" id="close-modal" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Contactenos</h4>
          </div>
          <div class="modal-body">

          </div>
        </div>
      </div>
    </div>--><!-- Fin Modal -->

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
