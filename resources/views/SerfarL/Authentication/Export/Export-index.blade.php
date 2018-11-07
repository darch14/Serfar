@extends('home')


@section('content')

	<br><br>
	<div class="panel panel-default">
		<div class="panel-heading"><center><h4>Exportar a Excel</h4></center></div>
		<div class="panel-body">
			<form class="" action="{{route('ExportOption.store')}}" role="form" method="POST" autocomplete="off">
				{{ csrf_field() }}
				<div class="form-group">
  	      <label for="namelabel">Plantilla</label>
          <select name="data" class="form-control">
            <option value="P">Productos</option>
          </select>
				</div>
				<button type="submit" class="btn btn-primary">Acción</button>
			</form>
		</div>
	</div>

@endsection
