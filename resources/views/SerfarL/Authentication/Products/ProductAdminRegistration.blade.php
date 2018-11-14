@extends('home')

@section('link')
	<link rel="stylesheet" href="{{asset('css/styleS.css')}}">
@endsection

@section('content')

	<br><br>
	<div class="panel panel-default">
		<div class="panel-heading"><center><h4>Registrar Producto</h4></center></div>
		<div class="panel-body">
			<form class="" action="{{route('ProductAdmin.store')}}" role="form" method="POST" enctype="multipart/form-data" autocomplete="off">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="namelabel">Referencia</label>
          <input type="text" name="reference" class="form-control" placeholder="Referancia" required>
				</div>
				<div class="form-group">
					<label for="namelabel">Nombre</label>
          <input type="text" name="name" class="form-control" placeholder="Nombre" required>
				</div>
				<div class="form-group">
					<label for="namelabel">Descripción</label>
					<textarea name="description" placeholder="Descripción" maxlength="499" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="namelabel">Categoria</label>
          			<input type="text" name="category" class="form-control" placeholder="Categoria" required>
				</div>
				<div class="form-group">
					<label for="namelabel">Uso terapéutico</label>
					<textarea name="use" placeholder="Uso terapéutico" maxlength="499" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="namelabel">Unidad de Venta</label>
          <input type="text" name="unit" class="form-control" placeholder="Unidad de Venta" required>
				</div>
				<div class="form-group">
					<label for="namelabel">Registro sanitario INVIMA</label>
          <input type="text" name="invima" class="form-control" placeholder="Registro sanitario INVIMA" required>
				</div>
				<div class="form-group">
					<label for="brandlabel">Laboratorio</label>
					<input type="text" name="filtro" id="filtro" class="form-control" placeholder="Filtro">
					<div class="table-responsive table-wrapper-scroll-y">
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
										    	<input type="radio" name="laboratory_id" value="{{ $laboratory->id }}" aria-label="" required>
										    </span>
							            </td>
							            <td>{{ $laboratory->name }}</td>
													@if (!empty($laboratory->lab_images))
														<td><img src="{{ asset('images/labs/'. $laboratory->lab_images->name ) }}" width="60px"></td>
													@else
														<td>No tiene</td>	
													@endif
							      	</tr>
						        @endforeach
						    </tbody>
						</table>
					</div>
				</div>
				<div class="form-group">
			      	<label for="exampleInputFile">Foto</label>
			      	<input type="file" name="file" required>
			      	<p class="help-block">Subir la foto del productos a registrar</p>
			    </div>
				<button type="submit" class="btn btn-primary">Guardar</button>
				<a href="{{ route('ProductAdmin.index') }}" class="btn btn-danger">Cancelar</a>
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
