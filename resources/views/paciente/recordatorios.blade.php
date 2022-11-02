@extends('adminlte::page')

@section('title', 'Paciente - Historial de Recordatorios')

@section('content_header')
<h1>
    Recordatorios
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-category">
        Crear
    </button>
</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de recordatorios</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="records" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Medicamento_Id</th>
                                <th>Medicamento_Nombre</th>
                                <th>Numero de Expediente</th>
                                <th>Nombre de Paciente</th>
                                <th>Fecha de Inicio</th>
                                <th>Fecha de Fin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Reminders as $reminder)
                            <tr>
                                <td>{{$reminder->id}}</td>
                                <td>{{$reminder->medicamento_id}}</td>
                                <td>{{$Medicines->nombre}}</td>
                                <td>{{$reminder->expediente_id}}</td>
                                    <td>{{$patients->nombre1}} {{$patients->nombre2}} {{$patients->apellido1}}
                                        {{$patients->apellido2}}</td>
                                    <td>{{$reminder->fechaInicio}}</td>
                                    <<td>{{$reminder->fechaFinal}}</td>
                            </tr>
                            @endforeach
                        </tbody>

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
<div class="modal fade" id="modal-create-category">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Crear Categoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{route('paciente.agregar_recordatorio')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group">
                <h2>Nuevo Recordatorio</h2>
                    <br1>
                        <!--- Cedula Paciente-->
                        <div class="mb-3">
                            <label class="form-label">Numero de Cedula</label>
                            <input type="text" class="form-control" id="expediente_id" name = "expediente_id"
                                value=" {{$records->id}}" readonly=»readonly>
                        </div>
                        <!--- Nombre-->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre Completo </label>
                            <input type="text" name="nombre1" class="form-control" id="nombre1"
                                value="{{$patients->nombre1}} {{$patients->nombre2 }} {{$patients->apellido1}} {{$patients->apellido2}} "
                                readonly=»readonly>
                        </div>
                        <!--- Medicamento-->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Medicamento</label>
                            <select class="form-control" aria-label="Default select example" name="medicamento_id"
                                id='medicamento_id'>
                               <option value="">Seleccione el medicamento</option>
                                @foreach($Medicinas as $medicine)
                                <option value="{{$medicine->id}}">{{$medicine ->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--- Fecha Inicio-->
                        <div class="mb-3">
                            <label class="form-label">Fecha de inicio</label>
                            <input type="date" class="form-control" id="fechaInicio" name="fechaInicio">
                        </div>
                        <!--- Fecha Fin-->
                        <div class="mb-3">
                            <label class="form-label">Fecha de fin</label>
                            <input type="date" class="form-control" id="fechaFinal" name="fechaFinal">
                        </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Agregar</button>
            </div>
            </form>
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
    $('#records').DataTable({
        "order": [
            [3, "desc"]
        ]
    });
});
</script>
@stop