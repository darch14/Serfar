@extends('SerfarL.principal')

@section('title', '- Portafolio')

@section('style')
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
@endsection

@section('content')
  <br>
  <div class="container marketing">
    <div class="text-center title title-span">
      Portafolio
    </div>
    <hr class="style13">
    <div class="center">
      <br><p class="lead">
        Contamos con las mejores y las mas reconocidas marcas del pais, asi garantizamos la calidad de nuestros productos.
      </p><br>
    </div>
    <div class="center">
      <form class="form-horizontal" action="{{route('PortfolioStore')}}" method="post" autocomplete="off">
        {{ csrf_field() }}
        <div class="form-group">
          <div class="col-sm-4">
            <input type="text" name="name" class="form-control" placeholder="Buscar producto">
          </div>
          <div class="col-sm-3">
            <select class="form-control selectpicker" name="category">
              <option value="null">Selecionar Categoria..</option>
              <option value="Medicamento">Medicamentos</option>
              <option value="Dispositivo Medico">Dispositivos Medicos</option>
            </select>
          </div>
          <div class="col-sm-3">
            <select class="form-control selectpicker" data-live-search="true" name="lab">
              <option value="null">Selecionar Laboratorio..</option>
              @foreach ($laboratory as $laboratory)
                <option value="{{$laboratory->id}}">{{$laboratory->name}}</option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary col-sm-1 ">Buscar</button>
        </div>
      </form>
    </div>
    <br><br>
    <div class="row center">
      @foreach($product as $product)
        @if (!empty($product->pro_image))
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="{{ asset('images/prod/'.$product->pro_image->name) }}" alt="">
              <div class="caption">
                <h3 class="text-capitalize">{{$product->name}}</h3>
                <p><a href="{{ route('PortfolioDetail', Crypt::encrypt($product->id)) }}" class="btn btn-primary btn-block" role="button">
                  <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                  saber mas
                </a></p>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>
    {{ $render }}
    <button type="button" data-toggle="modal" data-target="#ModalCondition" hidden id="modalButton" name="button"></button>
    @include('SerfarL.ModalCondition')
  </div>
@endsection

@section('script')
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#li-ini").removeAttr("class");
      $("#li-med").attr("class","active");
      $("#li-lab").removeAttr("class");
      $("#li-hum").removeAttr("class");
      $("#li-qui").removeAttr("class");
      $("#li-con").removeAttr("class");

      if ("{{$modal}}" != "OK") {
        $('#modalButton').click();
      }
    });
  </script>
@endsection
