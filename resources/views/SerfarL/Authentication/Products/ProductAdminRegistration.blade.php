@extends('home')


@section('content')

	{{-- <br><br>
  	<div class="panel panel-default">
	    <!-- Default panel contents -->
	    <div class="panel-heading"><center><h4>Registrar Producto</h4></center></div>
	    <div class="panel-body">
	      	<form class="" action="{{route('ProductAdmin.store')}}" role="form" method="POST" enctype="multipart/form-data" autocomplete="off">
		        {{ csrf_field() }}
		        <div class="form-group">
		          <label for="InputEmail1">Correo</label>
		          <input type="email" name="email" class="form-control" placeholder="Correo" required>
		        </div>
		        <div class="form-group">
		          <label for="InputName">Nombre</label>
		          <input type="text" name="name" class="form-control" placeholder="Nombre" required>
		        </div>
		        <div class="form-group">
		          <label for="InputPosition">Cargo</label>
		          <input type="text" name="position" class="form-control" placeholder="Cargo" required>
		        </div>
		        <div class="form-group">
		          <label for="InputNumber">Numero de Contacto</label>
		          <input type="text" name="number" class="form-control" placeholder="Numero de Contacto" maxlength="11" required>
		        </div>
		        <div class="form-group">
		          <label for="exampleInputFile">Foto</label>
		          <input type="file" name="file" required>
		          <p class="help-block">Subir la foto del asesor a registrar</p>
		        </div>
		        <button type="submit" class="btn btn-primary">Guardar</button>
	      </form>
	    </div> --}}
  	</div>

@endsection