@extends('adminlte::page')

@section('title', 'Paciente - Historial de Citas')

@section('content_header')
<h1>
    Gestion de expediente
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-update-profile">
        Agregar Presion
    </button>
</h1>
@stop

@section('content')

<div class="card-body">
                <table id="presiones" class="table table-bordered table-striped">
                    
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    
                    
                    <tbody>
                        @foreach ($pressures as $presiones)
                         <tr>
                            
                            
                            <td>{{$presiones->fecha}}</td>
                            <td>{{$presiones->valor}}</td>
                            
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
            <form action="{{route('paciente.agregarPresion')}}" method="POST" enctype="multipart/form-data">
               @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="valor">Presion arterial</label>
                        <input type="number" name="valor" class="form-control" id="valor">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha actual</label>
                        <input type="date" name="fecha" id="fecha">
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                </div>
            </form>
        </div>


         

        @stop
