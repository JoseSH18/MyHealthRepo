<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\patient;
use App\Models\appointment;
use App\Models\medico;
use Illuminate\Support\Facades\Auth;



class PacientesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index(Request $request){

        
        return view('paciente.index');
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

}