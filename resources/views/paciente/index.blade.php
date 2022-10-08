<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyHealth - Homepage </title>
    <link rel="shortcut icon" href="{{asset('images/corazon.svg')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>

body {
    text-align: center;
    margin: 0px;
    padding: 0px;


    font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
    -moz-osx-font-smoothing: antialiased;
}

#header {
    height: 120px;
    width: 100%;
    background-image: url("{{asset('images/header.png')}}");
    border-bottom: 1px solid #ccc;
    border-top: 5px solid #ff920a;
}

.center {
    width: 75%;
    margin: 0px auto;
}

.clearfix {
    clear: both;
    float: none;
}

#logo {
    width: 30%;
    font-size: 30px;
    float: left;
    margin-top: 35px;
}

#logo img {
    display: block;
    float: left;
    height: 60px;
    margin-top: -9px;
    margin-right: 10px;
    animation: latir infinite 5s linear;
}

@keyframes latir {
    0% {
        transform: scale(1, 1);
    }

    50% {
        transform: scale(1.02, 1.02);
    }

    55% {
        transform: scale(0.95, 0.95);
    }

    100% {
        transform: scale(1, 1);
    }
}

#brand {
    display: block;
    margin: 0px;
    float: left;
}

#menu {
    width: 70%;
    float: right;
    font-size: 10px;
}

#menu ul {
    line-height: 120px;
    width: 80%;
    float: right;
}


#menu ul li {
    display: inline-block;
    list-style: none;
    height: 46px;
    margin-left: 5px;
    margin-right: 5px;
    
}

#menu a {
    text-decoration: none;
    color: #444;
    transition: 300ms all;
}


#menu a:hover,
.active {
    color: #ff920a !important;
}

#slider {
    width: 100%;
    height: 350px;
    line-height: 320px;
    color: white;
    text-shadow: 0px 0px 5px #444;

    background-image: url("{{asset('images/familia2.jpg')}}");
  
}

#slider:hover {
    background-image: url("{{asset('images/familia.jpg')}}");
    
}


#slider h1 {
    margin-top: 0.2px;
    padding: 0px;
    padding-top: 130px;
    text-align: center;
}

.btn-white {
    display: block;
    background: black;
    color: white;
    border-radius: 2em;
    border: none;
    outline: 2px solid black;
    outline-offset: 3px;
    padding: 10px;
    width: 120px;
    height: 40px;
    margin: 0px auto;
    font-size: 18px;
    text-transform: uppercase;
    text-shadow: none;
    text-decoration: none;
    line-height: 20px;
    box-shadow: 0px 0px 5px rgb(88, 88, 88);
    margin-top: 40px;
    border-radius: 4px;
    transition: 300ms all;
}



#slider.slider-small {
    height: 150px;
}

#slider.slider-small h1 {
    margin-top: 0.2px;
    padding: 0px;
    padding-top: 53px;
}

#content {
    width: 70%;
    float: left;
    min-height: 650px;
    margin-right: 20px;
}

#sidebar {
    background-image: url("{{asset('images/medicina3.png')}}");
    width: 25%;
    float: right;
}
#section {
    background-image: url("{{asset('images/niños.jpg')}}");
    width: 75%;
    float: left;
    margin-top: 2px;
}

.sidebar-item {
    background: #f7f7f7;
    padding: 20px;
    margin-top: 30px;
}

.sidebar-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 17px rgba(0, 0, 0, 0.35);
}

.sidebar-item h3 {
    text-transform: uppercase;
    font-size: 18px;
    margin: 0px;
    padding-bottom: 10px;
    margin-bottom: 10px;
    border-bottom: 3px solid #eee;
}

.sidebar-item .btn {
    display: inline-block;
    padding: 0em 2em;
    background: black;
    color: white;
    border-radius: 2em;
    border: none;
    outline: 2px solid black;
    outline-offset: 3px;
}

.btn {
    display: block;
    background: black;
    color: white;
    padding: 15px;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    text-decoration: none;
    max-width: 120px;
    transition: 300ms all;
    border: none;
    cursor: pointer;
}

.btn-success {
    display: inline-block;
    padding: 1em 2em;
    background: black;
    color: white;
    border-radius: 2em;
    border: none;
    outline: 2px solid black;
    outline-offset: 3px;
}

.btn-success:hover {
    background: black;
}

.mid-form {
    width: 50%;
    margin: 0px auto;
}

.mid-form label {
    display: block;
    float: left;
    text-align: left;
    margin-top: 10px;
    margin-bottom: 5px;
    font-size: 17px;
}

input[type="text"],
textarea {
    width: 100%;
    min-height: 30px;
    border: 1px solid #ccc;
    padding: 3px;
    margin-bottom: 5px;
    transition: 300ms all;
}

input[type="text"]:focus,
textarea:focus {
    box-shadow: 0px 0px 5px #eee inset;
}

textarea {
    width: 100%;
    height: 150px;
    min-width: 100%;
    max-width: 100%;
    min-height: 150px;
    max-height: 300px;
}

.radibuttons {
    margin-top: 10px;
    margin-bottom: 10px;
    float: left;
}


#footer {
    background: #f7f7f7;
    width: 100%;
    height: 70px;
    line-height: 70px;
    color: #444;
}

#footer p {
    margin: 0px;
    padding: 0px;
}

.article-item {
    width: 100%;
    border-bottom: 1px solid #eee;
    padding-bottom: 20px;
    padding-top: 20px;
    text-align: left;
}

.article-item .image-wrap {
    width: 130px;
    height: 130px;
    overflow: hidden;
    float: left;
    margin-right: 15px;
    border: 1px solid #ccc;
}

.article-item .image-wrap img {
    height: 100%;
    text-align: center;
}

.article-item h2 {
    display: block;
    width: 100%;
    padding: 0px;
    margin: 0px;
    margin-bottom: 7px;
}

.article-item .date {
    display: block;
    width: 100%;
    color: rgb(122, 122, 122);
}

.article-item a {
    display: block;
    color: #444;
    text-decoration: none;
    margin-top: 10px;
}

.article-item a:hover {
    text-decoration: underline;
}

.subheader {
    font-size: 38px;
    border-bottom: 1px solid #eee;
    padding-bottom: 10px;
}

.article-detail .image-wrap {
    float: none;
    width: 100%;
    height: 300px;
}

.article-detail .image-wrap img {
    width: 100%;
    height: auto;
}

.article-detail .subheader {
    margin-top: 15px;
    margin-bottom: 0px;
    border: none;
}


@media (max-width: 1488px) {

 
    .center {
        width: 85%;
    }
}


@media (max-width: 1314px) {
    .center {
        width: 95%;
    }

    #menu ul {
        width: auto;
    }
}

@media (max-width: 881px) {
    #logo {
        width: 265px;
    }

    #menu {
        width: auto;
    }
}

@media (max-width: 813px) {
    #logo {
        float: none;
        width: 240px;
        margin: 0px auto;
        margin-top: 20px;
    }

    #menu,
    #menu ul {
        clear: both;
        float: none;
        width: 100%;
        margin: 0px;
        padding: 0px;
        line-height: 43px;
    }

    #content {
        float: none;
        width: 100%;
    }

    #sidebar {
        
        float: none;
        width: 60%;
        margin: 0px auto;
        margin-bottom: 50px;
    }

    #slider h1 {
       
        padding-top: 115px;
        font-size: 25px;
    }

    .mid-form {
        width: 70%;
    }
}

@media (max-width: 497px) {
    #header {
        min-height: 130px;
        overflow: hidden;
    }

    #menu,
    #menu ul {
        line-height: 50px;
    }

    #menu ul li {
        margin-left: 7px;
        margin-right: 7px;
    }

    #slider {
        height: 180px;
    }

    #slider h1 {
        font-size: 19px;
        padding-top: 30px;
    }

    #slider .btn-white {
        margin-top: 60px;
    }

    #slider.slider-small {
        height: 100px;
    }

    #slider.slider-small h1 {
        padding-top: 35px;
    }
}
</style>
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

