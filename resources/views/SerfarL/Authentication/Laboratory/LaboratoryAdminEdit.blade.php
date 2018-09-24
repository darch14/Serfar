@extends('home')

@section('content')
<br><br>
<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading"><center><h4>Editar Laboratorio</h4></center></div>
	<div class="panel-body">
	  	<form class="" action="{{route('LaboratoryAdmin.update', $laboratory->id)}}" role="form" method="POST" enctype="multipart/form-data" autocomplete="off">
	  		{{ method_field('PUT') }}
		    {{ csrf_field() }}
		    <div class="form-group">
		      	<label for="InputName">Nombre</label>
		      	<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ $laboratory->name }}" required>
		    </div>
		    <div class="form-group">
		      	<label for="InputLastName1">Pagina Web</label>
		      	<input type="text" name="web" class="form-control" placeholder="Primer Apellido" value="{{ $laboratory->web }}">
		    </div>
		    <div class="form-group">
		      	<label for="exampleInputFile">Foto</label>
		      	<input type="file" name="file">
		      	<p class="help-block">Subir la foto del asesor a registrar</p>
		    </div>
		    <button type="submit" class="btn btn-primary">Editar</button>
	  	</form>
	</div>
</div>
@endsection