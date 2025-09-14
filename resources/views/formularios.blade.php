@extends('layouts.main_layout')
@section('content')
    <div>
        <p>Bem-vindo, {{ Auth::user()->name }}!</p>
    </div>

    @foreach ($formularios as $formulario)
        <p>{{ $formulario->nome }}</p>
    @endforeach
@endsection
