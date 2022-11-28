<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Medico']);
        $role2 = Role::create(['name'=>'Paciente']);

        Permission::create(['name'=>'medico.index'])->assignRole($role1);
        Permission::create(['name'=>'medico.perfil'])->assignRole($role1);
        Permission::create(['name'=>'medico.gestion'])->assignRole($role1);
        Permission::create(['name'=>'medico.update'])->assignRole($role1);

        Permission::create(['name'=>'paciente.index'])->assignRole($role2);
        Permission::create(['name'=>'paciente.historial'])->assignRole($role2);
        Permission::create(['name'=>'paciente.perfil'])->assignRole($role2);
        Permission::create(['name'=>'paciente.update'])->assignRole($role2);
        Permission::create(['name'=>'paciente.grafica_de_Azucar'])->assignRole($role2);
        Permission::create(['name'=>'paciente.recordatorio'])->assignRole($role2);
        Permission::create(['name'=>'paciente.buscar'])->assignRole($role2);
        Permission::create(['name'=>'paciente.expediente'])->assignRole($role2);
        Permission::create(['name'=>'paciente.buscar_medicos'])->assignRole($role2);
        Permission::create(['name'=>'paciente.reservar_cita'])->assignRole($role2);
        Permission::create(['name'=>'paciente.presion'])->assignRole($role2);
        Permission::create(['name'=>'paciente.agregarPresion'])->assignRole($role2);
        Permission::create(['name'=>'paciente.actualizar_presion'])->assignRole($role2);
        Permission::create(['name'=>'paciente.eliminarPresion'])->assignRole($role2);
        Permission::create(['name'=>'paciente.graficarNivelesDePresion'])->assignRole($role2);
        Permission::create(['name'=>'paciente.cancelar_cita'])->assignRole($role2);
        Permission::create(['name'=>'paciente.agregarAlergia'])->assignRole($role2);
        Permission::create(['name'=>'paciente.alergias'])->assignRole($role2);
        Permission::create(['name'=>'paciente.registrarAlergia'])->assignRole($role2);

    }
}
