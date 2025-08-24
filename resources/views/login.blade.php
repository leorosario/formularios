@extends('layouts.main_layout')
@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Login:</label>
                <input type="email" name="email" class="form-control">                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha:</label>
                <input type="password" name="password" class="form-control">
            </div>
             @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror        
            <div class="d-flex">
                <div class="d-flex justify-content-start align-items-start w-50">
                    <a href="#">Criar conta</a>
                </div>
                <div class="d-flex justify-content-end align-items-end w-50">
                    <button type="submit" class="btn btn-primary me-0">Entrar</button>
                </div>            
                
            </div>            
        </form>
    </div>
@endsection

