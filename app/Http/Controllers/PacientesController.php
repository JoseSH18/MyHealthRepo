<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\sugar;
use App\Models\patient;
use App\Models\appointment;
use App\Models\medico;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

use App\Notifications\RecordatorioNuevoNotification;

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


   

    public function recordatorios(Request $request){
    $user = Auth::user();
    $patients = patient::firstWhere('correo', $user->email);
    $records = record::firstWhere('cedula_paciente', $patients->cedula);
    $Medicine = medicine::all();
    $Reminders = reminder::all();
    
        return view('paciente.recordatorios' , [    
            'patients' => $patients, 'records' => $records , "Medicine" => $Medicine, "Reminders" =>$Reminders
        ]);
    }

    public function vista_recordatorio(Request $request){
        $user = Auth::user();
        $correo = $user->email;
        $patients = patient::firstWhere('correo', $user->email);
        $records = record::firstWhere('cedula_paciente', $patients->cedula);
        $Medicines = medicine::all();
        $Reminders = reminder::all();
        return view('paciente.agregar_recordatorio' , [
            'patients' => $patients, 'records' => $records , "Medicines" => $Medicines, "Reminders" =>$Reminders
        ]);
        
    }

    public function agregar_recordatorio(Request $request){
        $Recordatorio = new reminder();
        $Recordatorio->medicamento_id = $request->medicamento_id;
        $Recordatorio->fechaInicio = $request->fechaInicio;
        $Recordatorio->fechaFinal = $request->fechaFinal;
        $Recordatorio->expediente_id = $request->expediente_id;

        $Recordatorio -> save();
        $delay = now()->addMinutes(1);
        $medicina = medicine::find($Recordatorio->medicamento_id);
        $user = Auth::user();
        $paciente = patient::firstWhere('correo', $user->email);
        Notification::route('mail', Auth::user()->email)->notify((new RecordatorioNuevoNotification($Recordatorio, $medicina, $paciente))->delay($delay));
        return redirect('/paciente/recordatorios');
    }
    
    public function buscar_medicos(Request $request){
        $texto=trim($request->get('texto'));


        if($texto != null){
        $medicos = medico::where('nombre1','LIKE', '%'.$texto.'%')
        ->orwhere('nombre2','LIKE', '%'.$texto.'%')
        ->orwhere('apellido1','LIKE', '%'.$texto.'%')
        ->orwhere('apellido2','LIKE', '%'.$texto.'%')
        ->get();
        return view('paciente.buscar_medicos', 
        [
            'medicos' => $medicos,
             'texto' => $texto
        ]
        );
        }else{
        $medicos = medico::All();
        return view('paciente.buscar_medicos', 
        [
            'medicos' => $medicos,
             'texto' => $texto
        ]
        );
        }
       
    }

    public function reservar_cita(Request $request, $codigo_medico){
        $medico = medico::firstWhere('codigo', $codigo_medico);
        $user = Auth::user();
        $patient = patient::firstWhere('correo', $user->email);
        $newAppointment = new appointment();
        $newAppointment->cedula_paciente = $patient->cedula;
        $newAppointment->codigo_medico = $codigo_medico;
        $newAppointment->estado = $request->estado;
        $newAppointment->fechaHora = $request->fechaHora;

        $newAppointment->save();

        return redirect('/paciente/historial');

    }
    

}