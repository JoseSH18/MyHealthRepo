<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\allergy;

class ModificarAlergiaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_modificarAlergia()
    {
        $alergia = new allergy();
        $alergia->id = 1;
        $alergia->nombre = "Polen";
        $alergia->save();

        $alergia->nombre = "Gatos";
        $alergia->save();

        $this->assertEquals('Gatos', $alergia->nombre);
        
   

    }
}
