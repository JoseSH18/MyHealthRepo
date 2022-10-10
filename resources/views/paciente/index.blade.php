<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyHealth - Homepage </title>
    <link rel="shortcut icon" href="{{asset('images/corazon.svg')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/build/assets/pacientestyle.1659dec3.css">
</head>
<body>
    <header id="header">
        <div class="center">
            <!-- LOGO -->
            <div id="logo">
                <img src="{{asset('images/corazon.svg')}}" class="app-logo" alt="Logotipo"/>
                <span id="brand">
                    <strong>My</strong>Health
                </span>
            </div>
            
            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li>
                        <a [routerLink]="['/home']" [routerLinkActive]="['active']"><h3>Inicio</h3></a>
                    </li>
                    <li>
                        <a [routerLink]="['/citas']" [routerLinkActive]="['active']"><h3>Citas</h3></a>
                    </li>
                    <li>
                        <a><h3>Doctores</h3></a>
                    </li>
                    <li>
                        <a><h3>Expediente</h3></a>
                    </li>
                    <li>
                        <a><h3>Recordatorio</h3></a>
                    </li>
                    <li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" id="dropdownmenu" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" href="">
                                    {{ csrf_field() }}
                                    
                                </form>
                            </div>
                        </li>   
                    </li>                            
                </ul>
            </nav>
    
            <!--LIMPIAR FLOTADOS-->
            <div class="clearfix"></div>
        </div>
    </header>
    <div id="slider" class="slider-big">
        <h1  style="color:#f3be5d">"No hay trucos, atajos, pastillas mágicas, pociones especiales o equipo especial. Lo único que necesitas es deseo y voluntad"</h1>
        <a href="#" class="btn-white">expediente</a>
    </div>
    <aside id="sidebar">
        <div id="nav-blog" class="sidebar-item">
            <h3>intenta reservar</h3>
            <a href="#" class="btn btn-success">reservar cita</a>
        </div>
        <div id="search" class="sidebar-item">
                <h3>Buscador</h3>
                <p>Encuentra lo que buscas</p>
                
                <form>
                    <input type="text" name="search" />
                    <p></p>
                    <input type="submit" name="submit" value="Buscar" class="btn" />
                </form>
        </div>
    </aside>
    <section id="section">
        
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="{{asset('images/corazon.svg')}}" alt="MyHealth logo" width="120" id="logofooter">
            </div>
            <div id="col-md-10">
                <a href="https://www.facebook.com/myhealth">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook MyHealth">
                </a>
                <a href="https://www.instagram.com/myhealth">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram MyHealth">
                </a>
                <a href="https://www.youtube.com/c/myhealth">
                    <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube MyHealth">
                </a>
                <p class="mt-3">Copyright © 2022 MyHealth. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </section>


    <div class="clearfix"></div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

