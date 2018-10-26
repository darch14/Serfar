@extends('home')

@section('content')
	<br><br>
	<div class="panel panel-default">
		<div class="panel-heading"><center><h4>Registrar Marca</h4></center></div>
		<div class="panel-body">
			<form class="" action="{{route('AdvisorAdmin.store')}}" role="form" method="POST" enctype="multipart/form-data" autocomplete="off">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="namelabel">Nombre</label>
          			<input type="name" name="name" class="form-control" placeholder="Nombre" required>
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
							            <td></td>
							            <td>{{ $laboratory->name }}</td>
							            <td><img src="{{ asset('images/labs/'.$laboratory->lab_images->name) }}" width="60px"></td>
							        </tr>
						        @endforeach
						    </tbody>
						</table>
						{!! $render !!}
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Guardar</button>
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