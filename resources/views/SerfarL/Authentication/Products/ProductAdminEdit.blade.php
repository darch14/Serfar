@extends('home')

@section('content')

	<br><br>
	<div class="panel panel-default">
		<div class="panel-heading"><center><h4>Editar Producto</h4></center></div>
		<div class="panel-body">
			<form class="" action="{{route('ProductAdmin.update', $product->id)}}" role="form" method="POST" enctype="multipart/form-data" autocomplete="off">
				{{ method_field('PUT') }}
				{{ csrf_field() }}
				<div class="form-group">
					<label for="namelabel">Nombre</label>
          			<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{$product->name}}" required>
				</div>
				<div class="form-group">
					<label for="namelabel">Descripción</label>
					<textarea name="description" placeholder="Descripción" class="form-control" required>{{$product->description}}</textarea>
				</div>
				<div class="form-group">
					<label for="namelabel">Categoria</label>
          			<input type="text" name="category" class="form-control" placeholder="Categoria" value="{{$product->category}}" required>
				</div>
				<div class="form-group">
					<label for="namelabel">Unidad de Medida</label>
          			<input type="text" name="unit" class="form-control" placeholder="Unidad de Medida" value="{{$product->unit}}" required>
				</div>
				<div class="form-group">
					<label for="brandlabel">Marcas</label>
					<input type="text" name="filtro" id="filtro" class="form-control" placeholder="Filtro">
					<div class="table-responsive">
						<table class="table table-striped table-hover">
						    <thead>
						        <tr>
						        	<th>Item</th>
						            <th>Nombre</th>
						            <th>Laboratotio</th>
						            <th>Logo</th>
						        </tr>
						    </thead>
						    <tbody id="tbl_bra">
						    	@foreach($brand as $brand)
							        <tr>
							            <td>
							            	<span class="input-group-addon">
							            		@if($brand->id == $product->brand_id)
											    	<input type="radio" name="brand_id" value="{{ $brand->id }}" aria-label="" checked required>
										    	@else
										    		<input type="radio" name="brand_id" value="{{ $brand->id }}" aria-label="" required>
										    	@endif
										    </span>
							            </td>
							            <td>{{ $brand->name }}</td>
							            <td>{{ $brand->laboratory->name }}</td>
							            <td><img src="{{ asset('images/labs/'.$brand->laboratory->lab_images->name) }}" width="60px"></td>
							        </tr>
						        @endforeach
						    </tbody>
						</table>
						{!! $render !!}
					</div>
				</div>
				<div class="form-group">
			      	<label for="exampleInputFile">Foto</label>
			      	<input type="file" name="file">
			      	<p class="help-block">Subir la foto del producto si desea cambiarla</p>
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
			    $("#tbl_bra tr").filter(function() {
			      	$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			    });
			});
		});
	</script>
@endsection