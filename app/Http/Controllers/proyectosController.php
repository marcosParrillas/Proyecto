<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proyectosController extends Controller
{
    public function index(){
        return view('proyecto');
    }

    public function mostrar(){
        echo "método mostrar";
    }

    public function crear(){
        return view('crear');
    }

    public function dataFormulario(Request $request){
        return $request->input('nombreProyecto');
    }
}
