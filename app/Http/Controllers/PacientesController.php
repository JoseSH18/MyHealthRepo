<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Paciente;

class PacientesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index(Request $request){

        return view('paciente.index');
    }


}
