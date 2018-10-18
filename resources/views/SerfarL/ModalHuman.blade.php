<!-- Modal -->
  <div class="modal fade" id="{{'Modal'.$advisor->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{ $advisor->name .' '. $advisor->lastname1 }}</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-6 center">
              <img src="{{ asset('images/asesores/'.$advisor->images->name) }}" class="img-thumbnail" alt="{{ $advisor->name }}" width="200px">
            </div>
            <div class="col-xs-6" align="left">
              <p>Email: {{ $advisor->email }}</p>
              <p>Numeno: {{ $advisor->number }}</p>
              <p>Cargo: {{ $advisor->position }}</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>