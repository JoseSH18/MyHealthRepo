@extends('adminlte::page')

@section('title', 'Paciente - Perfil')

@section('content_header')
<h1>
    Mi Perfil
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-update-profile-{{$patients->cedula}}">
        Editar Perfil
    </button>
    <a href="{{route('paciente.destroy',$patients->cedula)}}" class="btn btn-warning">Eliminar Perfil</a>
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
                                <td>{{$patients->cedula}}</td>
                            </tr>
                            <tr>
                                <td>Nombre Completo</td>
                                <td>{{$patients->getNombreCompletoAttribute()}}</td>
                            </tr>
                            <tr>
                                <td>Teléfono</td>
                                <td>{{$patients->telefono}}</td>
                            </tr>
                            <tr>
                                <td>Correo</td>
                                <td>{{$patients->correo}}</td>
                            </tr>
                            <tr>
                                <td>Estado Cívil</td>
                                <td>{{$patients->estadocivil}}</td>
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


<div class="modal fade" id="modal-update-profile-{{$patients->cedula}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Editar Perfil</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{route('paciente.update', $patients->cedula)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre1">Primer Nombre</label>
                        <input type="text" name="nombre1" class="form-control" id="nombre1" value="{{$patients->nombre1}}">
                    </div>
                    <div class="form-group">
                        <label for="nombre2">Segundo Nombre</label>
                        <input type="text" name="nombre2" class="form-control" id="nombre2" value="{{$patients->nombre2}}">
                    </div>
                    <div class="form-group">
                        <label for="apellido1">Primer Apellido</label>
                        <input type="text" name="apellido1" class="form-control" id="apellido1" value="{{$patients->apellido1}}">
                    </div>
                    <div class="form-group">
                        <label for="apellido2">Segundo Apellido</label>
                        <input type="text" name="apellido2" class="form-control" id="apellido2" value="{{$patients->apellido2}}">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="number" name="telefono" class="form-control" id="telefono" value="{{$patients->telefono}}">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="text" name="correo" class="form-control" id="correo" value="{{$patients->correo}}">
                    </div>
                    <div class="form-group">
                        <label for="estadocivil">Estado Cívil</label>
                        <select type="text" name="estadocivil" class="form-control" id="estadocivil" value="{{$patients->estadocivil}}">
                            <option value="Soltero">Soltero</option>
                            <option value="Casado" selected>Casado</option>
                            <option value="Divorciado" selected>Divorciado</option>
                            <option value="Viudo" selected>Viudo</option>
                        </select>
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
