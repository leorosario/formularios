<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function home()
    {
        $formularios = Formulario::where('id_usuario', Auth::user()->id)->get();
        return view('formularios', compact('formularios'));
    }
}
