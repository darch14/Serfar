@extends('SerfarL.principal')

@section('title','- Equipo Humano')

@section('content')

	<div class="container marketing">
	    <div class="text-center title ">
	      Equipo Humano
	    </div>
	    <hr class="style-eight">
	    <div class="center">
	      <br><p class="lead">
	        En SERFAR LTDA, asumimos como compromiso contribuir al bienestar de la población a través de la distribución de productos para la salud, que cumplan con las necesidades y expectativas de nuestros clientes. Fomentamos una cultura corporativa basada en la hospitalidad, excelente servicio, integridad y respeto.
	        <br><br>
			Buscamos atraer y retener un talento humano que practique la excelencia en su diario vivir. Contamos con personas capacitadas y apasionadas por hacer las cosas eficientemente.
	      </p><br>
	    </div>

	    <div class="row post center">
	      @foreach($advisor as $advisor)
	        <div class="col-xs-6 center">
	          <img src="{{ asset('images/asesores/'.$advisor->images->name) }}" class="img-thumbnail" alt="{{ $advisor->name }}" width="300px">
	          <br>
	          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#{{'Modal'.$advisor->id}}">Ver Datos</button>
	          @include('SerfarL.ModalHuman')

	        </div>
	      @endforeach
	    </div>

  	</div>


@endsection