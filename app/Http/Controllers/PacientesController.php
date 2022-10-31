<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\patient;
use App\Models\appointment;
use App\Models\medico;
use App\Models\sugar;
use Illuminate\Support\Facades\Auth;



class PacientesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index(Request $request){

        
        return view('paciente.index');
    }

    public function perfil(Request $request){
        $user = Auth::user();
        $patients = patient::firstWhere('correo', $user->email);
        return view('paciente.perfil',   [
            'patients' => $patients,
        ]);
    }

    public function update(Request $request, $cedula_paciente){
        $patient = patient::find($cedula_paciente);
        $user = Auth::user();
        $patient->nombre1 = $request->nombre1;
        $patient->nombre2 = $request->nombre2;
        $patient->apellido1 = $request->apellido1;
        $patient->apellido2 = $request->apellido2;
        $patient->estadocivil = $request->estadocivil;
        $patient->telefono = $request->telefono;
        $patient->correo = $request->correo;

        $user->name = $request->nombre1;
        $user->email = $request->correo;

        $patient->save();
        $user->save();

        return redirect()->back();

    }

    public function historial(Request $request){
        $user = Auth::user();
        $correo = $user->email;
        

        $texto=trim($request->get('texto'));
        if ($texto!=null) {
            $appointments = appointment::join('patients', function($join) use($correo, $texto)
            {
                $join->on('cedula_paciente', '=', 'patients.cedula')
                ->where('patients.correo', '=', $correo);
                   
            })->Where(function($query) use($correo, $texto) {
                $query->where('appointments.fechaHora','LIKE', '%'.$texto.'%')
                ->orWhere('appointments.id','LIKE', '%'.$texto.'%');
            })->get();     

        }else{
            $appointments = appointment::join('patients', function($join) use($correo)
        {
            $join->on('cedula_paciente', '=', 'patients.cedula')
                 ->where('patients.correo', '=', $correo);
        })
        ->get();
        }
       
        return view('paciente.historial', 
        [
            'appointments' => $appointments,
            'texto' => $texto
        ]
        );
    }

    public function grafica_de_Azucar(Request $request){

        $user = Auth::user();
        $patients = patient::firstWhere('correo', $user->email);
        
        
        return view('paciente.grafica_de_Azucar',[ 'patients' => $patients,]);
    }

    public function store(Request $request){
        $user = Auth::user();

        $newAzucar = new sugar();

        $newAzucar->fecha = $request->fecha;
        $newAzucar->valor = $request->valor;

        $newAzucar->save();

        return redirect()->back();

    }

    

}