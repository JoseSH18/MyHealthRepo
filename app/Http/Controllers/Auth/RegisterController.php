<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\medico;
use App\Models\patient;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
  
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user->assignRole($data['role']);
        if($data['role'] == "Paciente"){
            $newPaciente = new patient();
            $newPaciente->nombre1 = $data['name'];
            $newPaciente->nombre2 = $data['nombre2'];
            $newPaciente->apellido1 = $data['apellido1'];
            $newPaciente->apellido2 = $data['apellido2'];
            $newPaciente->cedula = $data['cedula'];
            $newPaciente->correo = $data['email'];
            $newPaciente->estadocivil = $data['estadocivil'];
            $newPaciente->telefono = $data['telefono'];
            $newPaciente->save();
        }else if($data['role'] == "Medico"){
            $newMedico = new medico();
            $newMedico->nombre1 = $data['name'];
            $newMedico->nombre2 = $data['nombre2'];
            $newMedico->apellido1 = $data['apellido1'];
            $newMedico->apellido2 = $data['apellido2'];
            $newMedico->codigo = $data['codigo'];
            $newMedico->correo = $data['email'];
            $newMedico->telefono = $data['telefono'];
            $newMedico->detalleMedico = $data['detallemedico'];
            $newMedico->direccion = $data['direccion'];
            $newMedico->consultorio = $data['consultorio'];
            $newMedico->especialidad = $data['especialidad'];
            $newMedico->servicio = $data['servicio'];
            $newMedico->save();
        }
        return $user;
       
    }
}