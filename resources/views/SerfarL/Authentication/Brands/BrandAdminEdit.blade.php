@extends('home')

@section('content')
	<br><br>
	<div class="panel panel-default">
		<div class="panel-heading"><center><h4>Editar Marca</h4></center></div>
		<div class="panel-body">
			<form class="" action="{{route('BrandAdmin.update', $brand->id)}}" role="form" method="POST" enctype="multipart/form-data" autocomplete="off">
				{{ method_field('PUT') }}
				{{ csrf_field() }}
				<div class="form-group">
					<label for="namelabel">Nombre</label>
          			<input type="name" name="name" class="form-control" placeholder="Nombre" value="{{ $brand->name }}" required>
				</div>
				<div class="form-group">
					<label for="laboratorylabel">Laboratorio</label>
					<input type="text" name="filtro" id="filtro" class="form-control" placeholder="Filtro">
					<div class="table-responsive">
						<table class="table table-striped table-hover">
						    <thead>
						        <tr>
						        	<th>Item</th>
						            <th>Nombre</th>
						            <th>Logo</th>
						        </tr>
						    </thead>
						    <tbody id="tbl_lab">
						    	@foreach($laboratory as $laboratory)
							        <tr>
							            <td>
							            	<span class="input-group-addon">
							            		@if($laboratory->id == $brand->laboratory_id)
										    		<input type="radio" name="laboratory_id" value="{{ $laboratory->id }}" checked required>
										    	@else
										    		<input type="radio" name="laboratory_id" value="{{ $laboratory->id }}" required>
										    	@endif
										    </span>
							            </td>
							            <td>{{ $laboratory->name }}</td>
							            <td><img src="{{ asset('images/labs/'.$laboratory->lab_images->name) }}" width="60px"></td>
							        </tr>
						        @endforeach
						    </tbody>
						</table>
						{!! $render !!}
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Actualizar</button>
				<a href="{{ route('BrandAdmin.index') }}" class="btn btn-danger">Cancelar</a>
			</form>
		</div>
	</div>
@endsection

@section('script')
	<script>
		$(document).ready(function(){
			$("#filtro").on("keyup", function() {
			    var value = $(this).val().toLowerCase();
			    $("#tbl_lab tr").filter(function() {
			      	$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			    });
			});
		});
	</script>
@endsection