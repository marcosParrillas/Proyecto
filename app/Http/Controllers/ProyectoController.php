<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index():Renderable{
        $proyectos=Proyecto::paginate();
        return view('proyectos.index',compact('proyectos'));
    }
}
