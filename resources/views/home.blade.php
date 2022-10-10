<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Inicio - MyHealth</title>
    <link rel="shortcut icon" href="{{asset('images/corazon.svg')}}">
    <link rel="stylesheet" href="/build/assets/homestyle.dc6a3f91.css">
</head>
<body>
        <header id="header">
            <div class="center">
                <!-- LOGO -->
                <div id="logo">
                    <img src="{{asset('images/corazon.svg')}}" class="app-logo" alt="Logotipo" width="50px"/>
                    <span id="brand">
                        <strong>My</strong>Health
                    </span>
                </div>
                
        
                <!--LIMPIAR FLOTADOS-->
                <div class="clearfix"></div>
            </div>
        </header>
        <section class="container-fluid content py-5">
            <div class="row justify-content-center">
                <!-- Post -->
                <div class="col-12 col-md-7 text-center" id="izq">
                    <h1>Paciente</h1>
                    <form action="{{route('paciente.index')}}" method="get">
                        {{ csrf_field() }}
                        <button class="btn btn-link">Ir a sitio</button>
                    </form>
                </div>
                <div class="col-md-3 offset-md-1" id="der">
                    <h1>Médico</h1>
                    <form action="{{route('paciente.index')}}" method="get">
                        {{ csrf_field() }}
                        <button class="btn btn-link">Ir a sitio</button>
                    </form>
                </div>
            </div>
        </section>

        
</body>
</html>