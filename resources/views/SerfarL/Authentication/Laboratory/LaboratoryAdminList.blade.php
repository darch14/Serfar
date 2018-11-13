@extends('home')

@section('content')

	<br><br>
	<div class="panel panel-default">
		<div class="panel-heading"><center><h4>Listado de Laboratorios</h4></center></div>
	</div>
	<input type="text" name="filtro" id="filtro" class="form-control" placeholder="Filtro">
	<table class="table table-striped" style="text-align: center;">
	    <thead>
				<th style="text-align: center;">ID</th>
	    	<th style="text-align: center;">Nombre</th>
				<th style="text-align: center;">Web</th>
				<th style="text-align: center;">Imagen</th>
		    <th style="text-align: center;">Acción</th>
	    </thead>
	    <tbody id="tbl_laboratory">
		    @foreach ($laboratory as $laboratory)
	        <tr>
						<td>{{ $laboratory->id }}</td>
						<td>{{ $laboratory->name }}</td>
						<td>{{ $laboratory->web }}</td>
						@if (!empty($laboratory->lab_images))
							<td>
		            	<img src="{{ asset('images/labs/'. $laboratory->lab_images->name ) }}" class="img-rounded" width="80px">
		          </td>
						@else
							<td>no tiene</td>
						@endif
	          <td>
		          <a href="{{ route('LaboratoryAdmin.edit', $laboratory->id) }}" class="btn btn-primary">
		          	<span class="glyphicon glyphicon-pencil" ></span>
		          </a>
		          <a href="{{ route('LaboratoryDestroy', $laboratory->id) }}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" role="button">
		            <span class="glyphicon glyphicon-trash" ></span>
		        	</a>
		        </td>
	        </tr>
		    @endforeach
	    </tbody>
	</table>
@endsection

@section('script')
	<script>
		$(document).ready(function(){
			$("#filtro").on("keyup", function() {
			    var value = $(this).val().toLowerCase();
			    $("#tbl_laboratory tr").filter(function() {
			      	$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			    });
			});
		});
	</script>
@endsection
