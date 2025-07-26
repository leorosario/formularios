@extends('layouts.main_layout')
@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form>
            <div class="mb-3">
                <label class="form-label">Login:</label>
                <input type="email" class="form-control">                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>            
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

