<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medico;
use Illuminate\Support\Facades\Auth;
class MedicosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function perfil(Request $request){
        $user = Auth::user();
        $medicos = medico::firstWhere('correo', $user->email);
        return view('medico.perfil',   [
            'medicos' => $medicos,
        ]);
    }

    public function update(Request $request, $codigo_medico){
        $medico = medico::find($codigo_medico);
        $user = Auth::user();
        $medico->nombre1 = $request->nombre1;
        $medico->nombre2 = $request->nombre2;
        $medico->apellido1 = $request->apellido1;
        $medico->apellido2 = $request->apellido2;
        $medico->consultorio = $request->consultorio;
        $medico->telefono = $request->telefono;
        $medico->correo = $request->correo;
        $medico->detalleMedico = $request->detalleMedico;
        $medico->especialidad = $request->especialidad;
        $medico->servicio = $request->servicio;
        $medico->direccion = $request->direccion;

        $user->name = $request->nombre1;
        $user->email = $request->correo;

        $medico->save();
        $user->save();

        return redirect()->back();

    }
    public function index(Request $request){

        return view('medico.index');
    }
}
