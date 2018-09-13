@extends('home')

@section('content')

<br><br>
<div class="row">
  <div class="col-sm-6 col-md-4">
  	@foreach($images as $images)
	    <div class="thumbnail">
	      <img src="{{ asset('images/labs/'.$images->name) }}" alt="..." class="img-rounded" width="200px" height="150px">
	      <div class="caption">
	        <h3>{{ $images->laboratory->name }}</h3>
	        <p align="center">
	        	<a href="#" class="btn btn-primary" role="button">Editar</a> 
	        	<a href="#" class="btn btn-danger" role="button">eliminar</a>
	        </p>
	      </div>
	    </div>
    @endforeach
  </div>
</div>
@endsection