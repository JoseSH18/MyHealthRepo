<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        Permission::create(['name'=>'paciente.index'])->assignRole($role2);
        Permission::create(['name'=>'paciente.citas'])->assignRole($role2);
        Permission::create(['name'=>'paciente.buscar'])->assignRole($role2);
        Permission::create(['name'=>'paciente.expediente'])->assignRole($role2);
    }
}
