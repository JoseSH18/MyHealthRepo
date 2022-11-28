<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\patient;

class RegistrarPacienteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_Un_paciente_ha_sido_registrado()
    {
        $usuario = new User();
        $usuario->email = "lenar@lenar.com";
        $usuario->name = "Lenar";
        $usuario->password = bcrypt("prueba123");
        $usuario->save();


        $paciente = new patient();
        $paciente->cedula = "2342332";
        $paciente->nombre1 = "Lenar";
        $paciente->nombre2 = "Andres";
        $paciente->apellido1 = "Tercero";
        $paciente->apellido2 = "Pérez";
        $paciente->telefono = 4545454;
        $paciente->correo = "lenar@lenar.com";
        $paciente->estadocivil = "Viudo";
        $paciente->save();

        $this->assertEquals($paciente->correo, $usuario->email);
    }
}
