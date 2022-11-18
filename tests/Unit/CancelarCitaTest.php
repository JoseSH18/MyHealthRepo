<?php

namespace Tests\Unit;

use App\Models\appointment;
use App\Models\patient;
use App\Models\medico;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CancelarCitaTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_una_cita_fue_cancelada()
    {
        $medico = new medico();
        $medico->codigo = "55555";
        $medico->nombre1 = "Pedro";
        $medico->nombre2 = "Juan";
        $medico->apellido1 = "Pérez";
        $medico->apellido2 = "Solano";
        $medico->telefono = 89099009;
        $medico->correo = "cuatro@cuatro.com";
        $medico->consultorio = "2322";
        $medico->detalleMedico = "Es un gran medico";
        $medico->especialidad = "Odontología";
        $medico->servicio = "Medicina";
        $medico->direccion = "Liberia";
        $medico->save();

        $paciente = new patient();
        $paciente->cedula = "77777";
        $paciente->nombre1 = "Pedro";
        $paciente->nombre2 = "Juan";
        $paciente->apellido1 = "Pérez";
        $paciente->apellido2 = "Solano";
        $paciente->telefono = 5656565;
        $paciente->correo = "cinco@cinco.com";
        $paciente->estadocivil = "Soltero";
        $paciente->save();
        
        $cita = new appointment();
        $cita->cedula_paciente = "77777";
        $cita->codigo_medico = "55555";
        $cita->fechaHora = "2022-11-18 23:33:34.000000";
        $cita->estado = "Cancelada";
        $cita->save();

        $this->assertEquals('Cancelada', $cita->estado);
    }
}
