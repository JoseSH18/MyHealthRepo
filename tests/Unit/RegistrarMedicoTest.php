<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\medico;

class RegistrarMedicoTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_Un_medico_ha_sido_registrado()
    {
        $usuario = new User();
        $usuario->email = "lenar@lenar.com";
        $usuario->name = "Lenar";
        $usuario->password = bcrypt("prueba123");
        $usuario->save();


        $medico = new medico();
        $medico->codigo = "34243";
        $medico->nombre1 = "Lenar";
        $medico->nombre2 = "Andres";
        $medico->apellido1 = "Pérez";
        $medico->apellido2 = "Tercero";
        $medico->telefono = 5645646;
        $medico->correo = "lenar@lenar.com";
        $medico->consultorio = "3434";
        $medico->detalleMedico = "Soy estudiante aun";
        $medico->especialidad = "Optometria";
        $medico->servicio = "Farmacia";
        $medico->direccion = "Santa Cruz";
        $medico->save();

        $this->assertEquals($medico->correo, $usuario->email);
    }
}
