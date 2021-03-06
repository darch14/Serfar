@extends('SerfarL.principal')

@section('title','- Equipo Humano')

@section('breadcrumbs')
  <ol class="breadcrumb breadcrumb-state">
    <li><a href="{{route('routeHome')}}">Inicio</a></li>
    <li class="active">Equipo Humano</li>
  </ol>
@endsection

@section('content')

	<div class="container marketing">
	    <div class="text-center title ">
	      Equipo Humano
	    </div>
	    <hr class="style13">
	    <div class="center">
	      <br><p class="lead">
	        En SERFAR LTDA, asumimos como compromiso contribuir al bienestar de la población a través de la distribución de productos para la salud, que cumplan con las necesidades y expectativas de nuestros clientes. Fomentamos una cultura corporativa basada en la hospitalidad, excelente servicio, integridad y respeto.
	        <br><br>
			Buscamos atraer y retener un talento humano que practique la excelencia en su diario vivir. Contamos con personas capacitadas y apasionadas por hacer las cosas eficientemente.
	      </p><br>
	    </div>

	    <div class="row post center">
	      @foreach($advisor as $advisor)
	        <div class="col-xs-4 center">
	          <img src="{{ asset('images/asesores/'.$advisor->images->name) }}" class="img-thumbnail" alt="{{ $advisor->name }}" width="250px" data-toggle="modal" data-target="#{{'Modal'.$advisor->id}}">
	          <button type="button" class="btn btn-default  img-thumbnail" style="width:250px" data-toggle="modal" data-target="#{{'Modal'.$advisor->id}}">Datos</button>
	          @include('SerfarL.ModalHuman')<br><br>
	        </div>
	      @endforeach
	    </div>

  	</div>
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $("#li-ini").removeAttr("class");
      $("#li-med").removeAttr("class");
      $("#li-lab").removeAttr("class");
      $("#li-hum").attr("class","active");
      $("#li-qui").removeAttr("class");
      $("#li-con").removeAttr("class");
    });
  </script>
@endsection
