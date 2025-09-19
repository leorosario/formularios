@extends('layouts.main_layout')
@section('content')   
    <div class="container d-flex justify-content-center align-items-center">
        <form class="w-50" method="POST" action="{{ url('/editar-formulario') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $formulario->id }}">
            <div class="mb-3">
                <label class="form-label">Nome:</label>                
                <input type="text" name="nome" class="form-control" value="{{ $formulario->nome }}">                
            </div>
            @error('nome')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="d-flex justify-content-end align-items-end">
                <button type="submit" class="btn btn-outline-success">Salvar</button>
            </div>      
        </form>
    </div>  

@endsection
