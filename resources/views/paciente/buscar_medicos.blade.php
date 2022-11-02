@extends('adminlte::page')

@section('title', 'Paciente - Perfil')

@section('content_header')
<h1>
    Buscar médico
    <form action="{{route('paciente.buscar_medicos')}}" method="get">
        <input type="text" name="texto" class="form-control" placeholder="Ingrese el nombre del médico" value="{{$texto}}">
        <input type="submit" class="btn btn-primary" value="Buscar">
    </form>
</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de médicos</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Cod. Médico</th>
                            <th>Nombre de médico</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Consultorio</th>
                            <th>Detalle del Médico</th>
                            <th>Especialidad</th>
                            <th>Servicio</th>
                            <th>Dirección</th>
                            <th>Reservar Cita</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($medicos as $medico)
                        <tr>
                            <td>{{$medico->codigo}}</td>
                            <td>{{$medico->getNombreCompletoAttribute()}}</td>
                            <td>{{$medico->telefono}}</td>
                            <td>{{$medico->correo}}</td>
                            <td>{{$medico->consultorio}}</td>
                            <td>{{$medico->detalleMedico}}</td>
                            <td>{{$medico->especialidad}}</td>
                            <td>{{$medico->servicio}}</td>
                            <td>{{$medico->direccion}}</td>
                            <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-reservar-cita-{{$medico->codigo}}">
                                Reservar
                            </button>
                            </td>
                            
                        </tr>
                        @include('paciente.modal-reservar-cita')
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Cod. Médico</th>
                            <th>Nombre de médico</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Consultorio</th>
                            <th>Detalle del Médico</th>
                            <th>Especialidad</th>
                            <th>Servicio</th>
                            <th>Dirección</th>
                            <th>Reservar Cita</th>
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



@stop