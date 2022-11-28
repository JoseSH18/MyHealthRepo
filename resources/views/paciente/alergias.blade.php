@extends('adminlte::page')

@section('title', 'Paciente - Gestión de alergías')

@section('content_header')
<h1>
    Gestion de expediente
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-update-profile">
        Agregar Alergia
    </button>
</h1>
@stop


@section('content')

<div class="card-body">
    <table id="alergias" class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>Alergia</th>
            </tr>
        </thead>


        <tbody>
          @foreach ($allergias as $alergia)
            <tr>


                <td>{{$alergia->nombre}}</td>
               

            </tr>

         

            @endforeach

        </tbody>

    </table>
</div>
</div>


<div class="modal-dialog">
    <div class="modal fade" id="modal-update-profile">
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <form action="{{route('paciente.agregarAlergia')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="valor">Nombre de la alergia</label>
                            <input type="text" name="nombre" class="form-control" id="nombre">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-outline-primary">Guardar</button>
                    </div>
                </form>
            </div>








            @stop
