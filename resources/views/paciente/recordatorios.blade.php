@extends('adminlte::page')

@section('title', 'Paciente - Historial de Recordatorios')

@section('content_header')
<h1>
    Recordatorios
    <a href="/paciente/vista_recordatorio" class ="btn btn-primary">Agregar</a>
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
                                <th>Nombre_Medicamento</th>
                                <th>Dosis</th>
                                <th>Numero de Expediente</th>
                                <th>Nombre de Paciente</th>
                                <th>Fecha de Inicio</th>
                                <th>Fecha de Fin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Reminders as $reminder)
                            <tr>
                                <td>{{$reminder -> id}}</td>
                                <td>{{$reminder -> medicamento_id}}</td>
                                <td></td>
                                <td></td>
                                <<td>{{$reminder -> expediente_id}}</td>
                                <td>{{$patients -> nombre1}} {{$patients -> nombre2}} {{$patients -> apellido1}} {{$patients -> apellido2}}</td>
                                <td>{{$reminder -> fechaInicio}}</td>
                                <<td>{{$reminder -> fechaFinal}}</td>
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