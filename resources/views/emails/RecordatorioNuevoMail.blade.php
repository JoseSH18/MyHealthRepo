<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Inicio - MyHealth</title>
    <link rel="shortcut icon" href="{{asset('images/corazon.svg')}}">
</head>

<body>
    <header id="header">
        <h4>Buenas estimado/a paciente, departe de clinica MyHealth le enviamos el siguiente recordatorio sobre los
            tiempos en que debe tomar sus medicamentos.</h4>
        <h6>Número de expediente: {{ $reminder->expediente_id }}</h6>
        <h6>Nombre de paciente: {{$paciente->nombre1}} {{$paciente->nombre2}} {{$paciente->apellido1}}
            {{$paciente->apellido2}}</h6>
        <h6>Recordatorio número: {{ $reminder->id }}</h6>
        <h6>Id Medicamento: {{ $medicina->id}}</h6>
        <h6>Nombre Medicamento: {{ $medicina->nombre}}</h6>
        <h6>Dosis Medicamento: {{ $medicina->detalleDosis}}</h6>
        <h6>Fecha de inicio: {{ $reminder->fechaInicio }}</h6>
        <h6>Fecha de fin: {{ $reminder->fechaFinal }}</h6>

        <h4>Un cordial saludo. <br>
        ¡¡Gracias por preferirnos!!</h4>



        </div>
    </header>
</body>

</html>