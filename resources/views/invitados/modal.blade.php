<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right mb-1" data-toggle="modal" data-target="#exampleModal">
  Agregar Acompañante
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Acompañante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['route'=>'acompanantes.store','method'=>'post']) !!}
          <div class="form-group">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="nino1" name="nino" class="custom-control-input" value="0" checked>
              <label class="custom-control-label" for="nino1">Adulto</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="nino2" name="nino" class="custom-control-input" value="1">
              <label class="custom-control-label" for="nino2">Niño</label>
            </div>
          </div>
          <div class="form-group">
            {!! Form::label('name','Nombre:') !!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre o Nombres','autofocus','required']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('appat','Apellido Paterno:') !!}
            {!! Form::text('appat',null,['class'=>'form-control','placeholder'=>'Apellido Paterno','required']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('apmat','Apellido Materno:') !!}
            {!! Form::text('apmat',null,['class'=>'form-control','placeholder'=>'Apellido Materno']) !!}
          </div>
      </div>
      <div class="modal-footer">
        {!! Form::submit('Agregar Acompañante',['class'=>'btn btn-success']) !!}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>