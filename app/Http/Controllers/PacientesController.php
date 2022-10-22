<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\patient;
use App\Models\appointment;
use App\Models\medico;



class PacientesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index(Request $request){

        
        return view('paciente.index');
    }

    public function historial(Request $request){

        $texto=trim($request->get('texto'));
        if ($texto!=null) {
            $appointments = appointment::where('estado','LIKE', '%'.$texto.'%')->paginate();
        }else{
            $appointments = appointment::All();
        }
       
        return view('paciente.historial', 
        [
            'appointments' => $appointments,
            'texto' => $texto
        ]
        );
    }

}
