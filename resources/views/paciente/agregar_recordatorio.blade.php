<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Recordatorio</title>
    <link rel="shortcut icon" href="{{asset('images/corazon.svg')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/build/assets/pacientestyle.0730def8.css">

</head>

<body>
    <header id="header">
        <div class="center">
            <!-- LOGO -->
            <div id="logo">
                <img src="{{asset('images/corazon.svg')}}" class="app-logo" alt="Logotipo" />
                <span id="brand">
                    <strong>My</strong>Health
                </span>
            </div>

            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li>
                        <a class="card" href="{{route('home')}}" id="card1">
                            {{ csrf_field() }}
                            <span>
                                <h4>Inicio</h4>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="card" href="{{route('paciente.historial')}}" id="card1">
                            {{ csrf_field() }}
                            <span>
                                <h4>Citas</h4>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a>
                            <h4>Doctores</h4>
                        </a>
                    </li>
                    <li>
                        <a>
                            <h4>Expediente</h4>
                        </a>
                    </li>
                    <li>
                        <a>
                            <h4>Recordatorios</h4>
                        </a>
                    </li>
                    <li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" id="dropdownmenu" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" href="">
                                {{ csrf_field() }}

                            </form>
                            <a class="dropdown-item" href="{{ route('paciente.perfil') }}" id="dropdownmenu2">
                                Perfil

                            </a>
                        </div>
                    </li>
                    </li>
                </ul>
            </nav>

            <!--LIMPIAR FLOTADOS-->
            <div class="clearfix"></div>
        </div>
    </header>

    <form action="{{route('paciente.agregar_recordatorio')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-11" id="titulo">
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
                                @foreach($Medicines as $medicine)
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

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Agregar</button>
                        </div>
                </div>
    </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</body>

</html>