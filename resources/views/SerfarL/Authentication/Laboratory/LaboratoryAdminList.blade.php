@extends('home')

@section('content')

	<br><br>
	<div class="panel panel-default"">
		<div class="panel-heading"><center><h4>Listado de Laboratorios</h4></center></div>
	</div>
	<div class="row">
		@foreach($laboratory as $laboratory)
	  	<div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="{{ asset('images/labs/'.$laboratory->lab_images->name) }}" alt="..." class="img-rounded" width="200px" height="150px">
		      <div class="caption">
		      	<h3 align="center"><small>{{ $laboratory->name }}</small></h3>
		        <p align="center">
		        	<a href="{{ route('LaboratoryAdmin.edit', $laboratory->id) }}" class="btn btn-primary" role="button">Editar</a> 
		        	<a href="{{ route('LaboratoryDestroy', $laboratory->id) }}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" role="button">
			        	Eliminar
			        </a>
		        	</form>
		        </p>
		      </div>
		    </div>
		</div>    
	    @endforeach
	</div>
@endsection