@extends('adminlte::page')

@section('title', 'Paciente - Gestión de alergías')

@section('content_header')
<h1>
    Gestion de expediente
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-allergy">
        Agregar Alergia
    </button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-your-allergy">
        Registrar Alergia
    </button>
  
</h1>
@stop


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de alergias</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="records" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allergies as $alergia)
                            <tr>
                                <td>{{$alergia->id}}</td>
                                <td>{{$alergia->nombre}}</td>
                            
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


<!-- /formulario para agregar datos ------------------------------------------------------------------------->
<div class="modal fade" id="modal-create-your-allergy">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Registra tu alergia</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('paciente.registrarAlergia')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-body">
                
                <div class="form-group">
                    <label for="valor">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </div>
        </form>
        </div>
    </div>
</div>




<div class="modal fade" id="modal-create-allergy">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Confirme su alergia</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{route('paciente.agregarAlergia',$records->expediente_id)}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group">
                <h2>Nueva alergia</h2>
                    <br1>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Alergia</label>
                            <select class="form-control" aria-label="Default select example" name="alergia_id" id='alergia_id'>
                               <option value="">Seleccione la alergia</option>
                                @foreach($todas_alergias as $alergias)
                                <option value="{{$alergias->id}}">{{$alergias ->nombre}}</option>
                                @endforeach
                            </select>
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

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista General de alergias</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="records" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre </th>
                                
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($todas_alergias as $alergias)
                        <tr>
                                <td>{{$alergias->id}}</td>
                                <td>{{$alergias->nombre}}</td>
                                <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-alergias-{{$alergias->id}}">
                                Modificar
                                 </button>
                                
                                
                                    
                                
                            </td>
                            </tr>
<div class="modal fade" id="modal-update-alergias-{{$alergias->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">actualizar registro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('paciente.updateAlergias', $alergias->id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-body">
                
                <div class="form-group">
                    <label for="valor">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="valor" value="{{$alergias->nombre}}">
                </div>
                
               
            
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </div>
        </form>
        </div>
    </div> 

<!-- -->
</div>

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