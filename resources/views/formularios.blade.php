@extends('layouts.main_layout')
@section('content')   
    <!-- Modal -->
    <div class="modal fade" id="modalCadastrarFormulario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Formulário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('/cadastrar-formulario') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nome:</label>
                            <input type="text" name="nome" class="form-control">                
                        </div>
                        @error('nome')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="d-flex justify-content-end align-items-end">
                            <button type="submit" class="btn btn-outline-success">Salvar</button>
                        </div>      
                    </form>
                </div>           
            </div>
        </div>
    </div>
    {{-- Fim da Modal --}}
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1>Formulários</h1>
            </div>
            <div class="col-sm d-flex align-items-center justify-content-center">                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-success d-flex align-items-center justify-content-center ms-auto" data-bs-toggle="modal" data-bs-target="#modalCadastrarFormulario">
                    <span class="material-symbols-outlined">add</span>
                </button>
            </div>
        </div>       
    </div>
    <div class="container">        
        @foreach ($formularios as $formulario)
            <div class="row d-flex align-items-center justify-content-center">
                <div class=" w-50 mt-3 d-flex align-items-center justify-content-center gap-2">
                    <a href="#" class="btn btn-outline-primary d-flex align-items-center justify-content-center">{{ $formulario->nome }}</a>
                    <a href="#" class="btn btn-outline-success d-flex align-items-center justify-content-center"><span class="material-symbols-outlined">download</span></a>
                    <a href="{{ route('editarFormulario', $formulario->id) }}" class="btn btn-outline-warning d-flex align-items-center justify-content-center"><span class="material-symbols-outlined">edit</span></a>
                    <form method="POST" action="{{ url('/deletar-formulario') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $formulario->id }}">
                        <button type="submit"  class="btn btn-outline-danger d-flex align-items-center justify-content-center"
                            onclick="return confirm('Tem certeza que deseja excluir este formulário?')"
                        ><span class="material-symbols-outlined">delete</span></button>
                    </form>
                </div>
            </div>
        @endforeach        
    </div>

@endsection
