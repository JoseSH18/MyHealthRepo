<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Inicio - MyHealth</title>
    <link rel="shortcut icon" href="{{asset('images/corazon.svg')}}">
    <link rel="stylesheet" href="/build/assets/homestyle.97794292.css">
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
<div class="card-container">
    <a class="card" target="_self" rel="noopener" href="{{route('medico.index')}}" id="card1">
    <img src="{{asset('images/doc.svg')}}" class="app-logo-doc" alt="Logotipo" />
      <span>Doctor</span>
      <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
    </a>
    <a class="card" target="_self" rel="noopener" href="{{route('paciente.index')}}" id="card2">
        <img src="{{asset('images/pac.svg')}}" class="app-logo-pac" alt="Logotipo" />
          <span>Paciente</span>
          <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
        </a>
  </div>

        
</body>
</html>