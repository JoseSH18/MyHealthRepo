@extends('adminlte::page')

@section('title', 'Paciente - Azucar')

@section('content_header')
<h1>
    Grafica de Azucar
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-sugar-{{$patients->cedula}}">
        Agregar datos
    </button>

    <div class="card-header">
    
</div>
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
        text: 'Azúcar'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: []
    },
    yAxis: {
        title: {
            text: 'Niveles de azucar'
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



<!-- /formulario para agregar datos ------------------------------------------------------------------------->
<div class="modal fade" id="modal-create-sugar-{{$patients->cedula}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Agregar nuevo registro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('paciente.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-body">
                
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="number" name="valor" class="form-control" id="valor">
                </div>
                
                <div class="form-group">
                    <label for="fecha">fecha</label>
                    <input type="date" name="fecha" class="form-control" id="fecha">
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




<!-- /tabla para mostrar registros -------------------------------------------------------------------->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Datos </h3>
                </div>
            <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                    
                    <thead>
                        <tr>
                            <th>fecha</th>
                            <th>valor</th>
                        </tr>
                    </thead>
                    
                    
                    <tbody>
                        @foreach ($sugars as $sugar)
                         <tr>
                            <td>{{$sugar->fecha}}</td>
                            <td>{{$sugar->valor}}</td>
                            
                            <td>
                                <button class="btn btn-warning">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </td>
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


 <!-- /formulario para actualizar------------------------------------------- -->

<div class="modal fade" id="modal-update-sugar-{{$patients->cedula}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">actualizar registro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('paciente.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-body">
                
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="number" name="valor" class="form-control" id="valor">
                </div>
                
                <div class="form-group">
                    <label for="fecha">fecha</label>
                    <input type="date" name="fecha" class="form-control" id="fecha">
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



  </body>
</html>

@stop



