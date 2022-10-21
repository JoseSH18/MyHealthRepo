<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Inicio - MyHealth</title>
    <link rel="shortcut icon" href="{{asset('images/corazon.svg')}}">
    <link rel="stylesheet" href="/build/assets/homestyle.dc6a3f91.css">
    <style>
        .card-container {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          margin-top: 16px;
        }
        .card {
          all: unset;
          border-radius: 4px;
          border: 1px solid rgb(238, 238, 238);

          height: 200px;
          width: 500px;
          margin: 0 8px 16px;
          padding: 16px;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items:center;
          transition: all 0.2s ease-in-out;
          line-height: 24px;
        }
        #card1{
            background-color: #e4806f;
        }
        #card2{
            background-color: #08cf7c;
        }
      
        .card-container .card:not(:last-child) {
          margin-right: 0;
        }
      
        .card.card-small {
          height: 16px;
          width: 168px;
        }
      
        .card-container .card:not(.highlight-card) {
          cursor: pointer;
        }
      
        .card-container .card:not(.highlight-card):hover {
          transform: translateY(-3px);
          box-shadow: 0 4px 17px rgba(0, 0, 0, 0.35);
        }
        body{
        background-image: url({{asset('/images/abstracto.png')}});

        }
        .card-container .card:not(.highlight-card):hover .material-icons path {
          fill: rgb(105, 103, 103);
        }
      
        a,
        a:visited,
        a:hover {
          color: #1f4baa;
          text-decoration: none;
        }
      
        a:hover {
          color: #b41861;
        } 
    
      
    .app-logo-pac{
        width: 78%;
    }
      
    
      
    
        
      </style>
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
    <div class="card-container" id="cont">
        
        <a class="card" target="_self" rel="noopener" href="{{route('medico.index')}}" id="card1" >
            {{ csrf_field() }}
        <img src="{{asset('images/medico.png')}}" class="app-logo-doc" alt="Logotipo" width="72"  />
          <span>Médico</span>
          <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
        </a>
        <a class="card" target="_self" rel="noopener" href="{{route('paciente.index')}}" id="card2">
            {{ csrf_field() }}
            <img src="{{asset('images/paciente.png')}}" class="app-logo-doc" alt="Logotipo" width="72" />
              <span>Paciente</span>
              <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
            </a>
      </div>

        
</body>
</html>