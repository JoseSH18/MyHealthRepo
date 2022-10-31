<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/build/assets/optionstyle.8ab2d76f.css">
    <title>Escoger tipo de registro</title>
</head>
<header id="header">
  <h1>Escoja con cual rol quiere registrarse</h1>
</header>
<body>
    <div class="card-container" id="cont">
        
        <a class="card" target="_self" rel="noopener" href="{{route('medicoregister')}}" id="card1" >
            {{ csrf_field() }}
        <img src="{{asset('images/medico.png')}}" class="app-logo-doc" alt="Logotipo" width="48"  />
          <span>Médico</span>
          <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
        </a>
        <a class="card" target="_self" rel="noopener" href="{{route('pacienteregister')}}" id="card2">
            {{ csrf_field() }}
            <img src="{{asset('images/paciente.png')}}" class="app-logo-doc" alt="Logotipo" width="48" />
              <span>Paciente</span>
              <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
            </a>
      </div>
</body>
</html>