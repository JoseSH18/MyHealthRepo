@extends('adminlte::page')

@section('title', 'Paciente - Gestión de Presión')

@section('content_header')
<h1>
    Gestion de expediente
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-update-profile">
        Agregar Presión
    </button>
</h1>
@stop

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags ------------------------------------------------------------------------------->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>grafico calificaciones EJEMPLO</title>
  </head>
  <body>
   

    <div class = "container mt-5">
<div class= "row">
<div class="col">
<div id = "container"></div>
</div>
</div>
    </div>
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
    
      // Data retrieved https://en.wikipedia.org/wiki/List_of_cities_by_average_temperature
Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Presión'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        arregloDeNiveles: []
    },
    yAxis: {
        title: {
            text: 'Monitoreo de Presiones Arteriales'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: true
        }
        
    },
    
    series: [ {
        name: 'Nivel',
       
        data: <?= $data ?>
    }]
});
    </script>



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
                <td>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-pressure-{{$presiones->id}}">
                        Modificar
                    </button>


                    <form action="{{route('paciente.eliminarPresion', $presiones->id)}}" method="POST">
                        {{csrf_field()}}
                        @method('DELETE')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>

                </td>

            </tr>

            <div class="modal fade" id="modal-update-pressure-{{$presiones->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Actualizar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('paciente.actualizar_presion', $presiones->id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-body">
                
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="number" name="valor" class="form-control" id="valor" value="{{$presiones->valor}}">
                </div>
                
                <div class="form-group">
                    <label for="fecha">fecha</label>
                    <input type="date" name="fecha" class="form-control" id="fecha" value="{{$presiones->fecha}}">
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
