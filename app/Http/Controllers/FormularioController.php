<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class FormularioController extends Controller
{
    public function cadastrarFormulario(Request $request)
    {
        $request->validate([
            'nome' => ['required', 'string', 'min:3', 'max:255'],            
        ], [
            // Mensagens personalizadas
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.min' => 'O nome deve ter no mínimo :min caracteres.',
            'nome.max' => 'O nome deve ter no máximo :max caracteres.',            
        ]);

        $formulario = new Formulario();
        $formulario->id_usuario = Auth::user()->id;
        $formulario->nome = $request->nome;
        $formulario->created_at = Carbon::now();
        $formulario->updated_at = Carbon::now();
        $formulario->save();
        
        return redirect('/');
    }

    public function editarFormulario($id){
        $formulario = Formulario::where("id", $id)->first();
        return view('editarFormulario', compact('formulario'));
    }

    public function editarFormularioBanco(Request $request){
        $request->validate([
            'nome' => ['required', 'string', 'min:3', 'max:255'],            
        ], [
            // Mensagens personalizadas
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.min' => 'O nome deve ter no mínimo :min caracteres.',
            'nome.max' => 'O nome deve ter no máximo :max caracteres.',            
        ]);

        $formulario = Formulario::where("id", $request->id)->first();
        $formulario->nome = $request->nome;
        $formulario->updated_at = Carbon::now();
        $formulario->save();
        return redirect('/');
    }

    public function deletarFormulario(Request $request){       
        $formulario = Formulario::findOrFail($request->id);      
        $formulario->delete();
        return redirect('/');
    }
}
