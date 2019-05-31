<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#exampleModal">
  Agregar Pareja
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Pareja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['route'=>['eventos.update', $user->evento->id], 'method'=>'PUT']) !!}
          {!! Form::label('cofestejado','Nombre:') !!}
          {!! Form::text('cofestejado',null,['class'=>'form-control','required']) !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>