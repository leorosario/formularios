@extends('layouts.main_layout')
@section('content')
    <div>
        <p>Bem-vindo, {{ Auth::user()->name }}!</p>
    </div>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Sair</button>
    </form>
@endsection
