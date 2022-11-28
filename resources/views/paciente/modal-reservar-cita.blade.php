<div class="modal fade" id="modal-reservar-cita-{{$medico->codigo}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Reservar cita</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
                <form action="{{route('paciente.reservar_cita', $medico->codigo)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-body">
                    <div class="form-group">
                     <label for="fechaHora">Fecha y Hora de Cita</label>
                     <input type="datetime-local" name="fechaHora" class="form-control" id="fechaHora" >
            </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-outline-primary">Reservar</button>
            </div>
                </form>
        </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>