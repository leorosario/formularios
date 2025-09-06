@extends('layouts.main_layout')
@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form method="POST" action="{{ url('/criar-conta') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome:</label>
                <input type="text" name="name" class="form-control">                
            </div>
            @error('nome')
                <div class="text-danger">{{ $message }}</div>
            @enderror  
            <div class="mb-3">
                <label class="form-label">Login:</label>
                <input type="email" name="email" class="form-control">                
            </div>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label class="form-label">Senha:</label>
                <input type="password" name="password" class="form-control">
            </div>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label class="form-label">Confirmar Senha:</label>
                <input type="password" name="confirmPassword" class="form-control">
            </div>  
            @error('confirmPassword')
                <div class="text-danger">{{ $message }}</div>
            @enderror         
            <div class="d-flex">
                <div class="d-flex justify-content-start align-items-start w-50">
                    <a href="{{ route('login') }}">Página de login</a>
                </div>
                <div class="d-flex justify-content-end align-items-end w-50">
                    <button type="submit" class="btn btn-primary me-0">Cadastrar</button>
                </div>            
                
            </div>            
        </form>
    </div>
@endsection


