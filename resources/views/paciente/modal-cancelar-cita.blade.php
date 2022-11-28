<div class="modal fade" id="modal-cancelar-cita-{{$appointment->id}}">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">¿Desea Cancelar la cita?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
                <form action="{{route('paciente.cancelar_cita', $appointment->id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-primary">Sí</button>
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
            </div>
                </form>
        </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
