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
        <h4>Número de expediente: {{ $reminder->expediente_id }}</h4>
        <h4>Nombre de paciente: {{$paciente->nombre1}} {{$paciente->nombre2}} {{$paciente->apellido1}}
            {{$paciente->apellido2}}</h4>
        <h4>Recordatorio número: {{ $reminder->id }}</h4>
        <h4>Id Medicamento: {{ $medicina->id}}</h4>
        <h4>Nombre Medicamento: {{ $medicina->nombre}}</h4>
        <h4>Dosis Medicamento: {{ $medicina->detalleDosis}}</h4>
        <h4>Fecha de inicio: {{ $reminder->fechaInicio }}</h4>
        <h4>Fecha de fin: {{ $reminder->fechaFinal }}</h4>



        </div>
    </header>
</body>

</html>