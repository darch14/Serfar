@extends('home')


@section('content')

	<br><br>
	<div class="panel panel-default">
		<div class="panel-heading"><center><h4>Importar desde Excel</h4></center></div>
		<div class="panel-body">
			<form class="" action="{{route('ImportOption.store')}}" role="form" method="POST" enctype="multipart/form-data" autocomplete="off">
				{{ csrf_field() }}
				<div class="form-group">
  	      <label for="namelabel">Plantilla</label>
          <select name="data" class="form-control">
            <option value="P">Productos</option>
          </select>
				</div>
        <div class="form-group">
  	      <label for="exampleInputFile">Archivo</label>
  	      <input type="file" name="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" required>
  	      <p class="help-block">Subir archivo .xlsx</p>
  	    </div>
				<button type="submit" class="btn btn-primary">Acción</button>
			</form>
		</div>
	</div>

@endsection
