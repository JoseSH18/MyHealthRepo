@extends('adminlte::page')

@section('title', 'Medico - Perfil')

@section('content_header')
<h1>
    Mi Perfil
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-update-profile-{{$medicos->codigo}}">
        Editar Perfil
    </button>
</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Datos de Perfil</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td>Cédula</td>
                            <td>{{$medicos->codigo}}</td>
                        </tr>
                        <tr>
                            <td>Nombre Completo</td>
                            <td>{{$medicos->getNombreCompletoAttribute()}}</td>
                        </tr>
                        <tr>
                            <td>Teléfono</td>
                            <td>{{$medicos->telefono}}</td>
                        </tr>
                        <tr>
                            <td>Correo</td>
                            <td>{{$medicos->correo}}</td>
                        </tr>
                        <tr>
                            <td>Consultorio</td>
                            <td>{{$medicos->consultorio}}</td>
                        </tr>
                        <tr>
                            <td>Detalle del Médico</td>
                            <td>{{$medicos->detalleMedico}}</td>
                        </tr>
                        <tr>
                            <td>Especialidad</td>
                            <td>{{$medicos->especialidad}}</td>
                        </tr>
                        <tr>
                            <td>Servicio</td>
                            <td>{{$medicos->servicio}}</td>
                        </tr>
                        <tr>
                            <td>Dirección</td>
                            <td>{{$medicos->direccion}}</td>
                        </tr>

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


<div class="modal fade" id="modal-update-profile-{{$medicos->codigo}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Editar Perfil</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('medico.update', $medicos->codigo)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group">
                    <label for="nombre1">Primer Nombre</label>
                    <input type="text" name="nombre1" class="form-control" id="nombre1" value="{{$medicos->nombre1}}">
                </div>
                <div class="form-group">
                <label for="nombre2">Segundo Nombre</label>
                <input type="text" name="nombre2" class="form-control" id="nombre2" value="{{$medicos->nombre2}}">
                </div>
                <div class="form-group">
                <label for="apellido1">Primer Apellido</label>
                <input type="text" name="apellido1" class="form-control" id="apellido1" value="{{$medicos->apellido1}}">
                </div>
                <div class="form-group">
                    <label for="apellido2">Segundo Apellido</label>
                    <input type="text" name="apellido2" class="form-control" id="apellido2" value="{{$medicos->apellido2}}">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="number" name="telefono" class="form-control" id="telefono" value="{{$medicos->telefono}}">
                </div>
                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="text" name="correo" class="form-control" id="correo" value="{{$medicos->correo}}">
                </div>
                <div class="form-group">
                    <label for="consultorio">Consultorio</label>
                    <input type="text" name="consultorio" class="form-control" id="consultorio" value="{{$medicos->consultorio}}">
                </div>
                <div class="form-group">
                    <label for="detalleMedico">Detalle del Médico</label>
                    <textarea name="detalleMedico" class="form-control" id="detalleMedico" cols="30" rows="10" >{{$medicos->detalleMedico }}</textarea>
                </div>
                <div class="form-group">
                    <label for="especialidad">Especialidad</label>
                    <input type="text" name="especialidad" class="form-control" id="especialidad" value="{{$medicos->especialidad}}">
                </div>
                <div class="form-group">
                    <label for="servicio">Servicio</label>
                    <input type="text" name="servicio" class="form-control" id="servicio" value="{{$medicos->servicio}}">
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" class="form-control" id="direccion" value="{{$medicos->direccion}}">
                </div>

            
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </div>
        </form>
        </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@stop