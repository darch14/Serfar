@extends('home')

@section('content')

<br><br>
<div class="row">
	@foreach($images as $images)
  	<div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="{{ asset('images/labs/'.$images->name) }}" alt="..." class="img-rounded" width="200px" height="150px">
	      <div class="caption">
	        <p align="center">
	        	<a href="#" class="btn btn-primary" role="button">Editar</a> 
	        	<a href="#" class="btn btn-danger" role="button">eliminar</a>
	        </p>
	      </div>
	    </div>
	</div>    
    @endforeach
</div>
@endsection