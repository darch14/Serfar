@extends('home')

@section('content')

<br><br>
	<div class="panel panel-default"">
		<div class="panel-heading"><center><h4>Listado de Productos</h4></center></div>
	</div>
	<input type="text" name="filtro" id="filtro" class="form-control" placeholder="Filtro">
	<table class="table table-striped" style="text-align: center;">
	    <thead>
	    	<th style="text-align: center;">ID</th>
		    <th style="text-align: center;">Nombre</th>
		    <th style="text-align: center;">Marca</th>
		    <th style="text-align: center;">Laboratorio</th>
		    <th style="text-align: center;">Imagen</th>
		    <th style="text-align: center;">Acción</th>
	    </thead>
	    <tbody id="tbl_product">
		    @foreach ($product as $product)
		        <tr>
			        <td>{{ $product->id }}</td>
			        <td>{{ $product->name }}</td>
			        <td>{{ $product->brand->name }}</td>
			        <td>{{ $product->brand->laboratory->name }}</td>
			        <td> 
		            	<img src="{{ asset('images/labs/'.$product->pro_image->name ) }}" class="img-rounded" width="80px"> 
		          	</td>
		          	<td>
			            <a href="{{ route('ProductAdmin.edit', $product->id) }}" class="btn btn-warning">
			              	<span class="glyphicon glyphicon-pencil" ></span>
			            </a>
			            <a href="{{ route('ProductDestroy', $product->id) }}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger">
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
			    $("#tbl_product tr").filter(function() {
			      	$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			    });
			});
		});
	</script>
@endsection