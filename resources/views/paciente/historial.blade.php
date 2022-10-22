@extends('adminlte::page')

@section('title', 'Paciente - Historial de Citas')

@section('content_header')
<h1>
    Historial de Citas
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-cita">
        Reservar Cita
    </button>
    <div class="card-header">
        <form action="{{route('paciente.historial')}}" method="get">
    <input type="text" name="texto" class="form-control" placeholder="Ingrese nombre de médico o número de cita a buscar" value="{{$texto}}">
    <input type="submit" class="btn btn-primary" value="Buscar">
</form>
</div>
</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de citas</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id Cita</th>
                            <th>Fecha y Hora</th>
                            <th>Nombre de paciente</th>
                            <th>Nombre de médico</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                        <tr>
                            <td>{{$appointment->id}}</td>
                            <td>{{$appointment->fechaHora}}</td>
                            <td>{{$appointment->patient->getNombreCompletoAttribute()}}</td>
                            <td>{{$appointment->medico->getNombreCompletoAttribute()}}</td>
                            <td>{{$appointment->estado}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id Cita</th>
                            <th>Fecha y Hora</th>
                            <th>Nombre de paciente</th>
                            <th>Nombre de médico</th>
                            <th>Estado</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<!-- modal -->
<div class="modal fade" id="modal-create-cita">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Crear Categoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
            <div class="modal-body">
                <p>Proximamente, Formulario....</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-light">Save changes</button>
            </div>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#categories').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop