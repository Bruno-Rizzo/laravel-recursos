@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            Novo Funcionário
        </div>
        <form action="{{route('funcionarios.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{old('nome')}}">
                <span class="text-danger">@error('nome') {{$message}} @enderror</span>
            </div>
            <div class="mb-3">
                <label class="form-label">Setor</label>
                <select name="setor" class="form-select">
                    <option value="">Selecione um setor...</option>
                    <option value="Financeiro">Financeiro</option>
                    <option value="Marketing Digital">Marketing Digital</option>
                    <option value="Tecnologia">Tecnologia</option>
                    <option value="Vendas">Vendas</option>
                </select>
                <span class="text-danger">@error('setor') {{$message}} @enderror</span>
            </div>
            <div class="mb-3">
                <label class="form-label">Função</label>
                <select name="funcao" class="form-select">
                    <option value="">Selecione uma função...</option>
                    <option value="Analista">Analista</option>
                    <option value="Coordenador">Coordenador</option>
                    <option value="Gerente">Gerente</option>
                </select>
                <span class="text-danger">@error('funcao') {{$message}} @enderror</span>
            </div>
            <div class="mb-3">
                <label class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto">
                <span class="text-danger">@error('foto') {{$message}} @enderror</span>
            </div>
       </div>
        <div class="card-footer">
            <a href="{{route('funcionarios.index')}}" class="btn btn-sm btn-info">
                <i class="fas fa-undo me-1"></i> Voltar
            </a>
            <button type="submit" class="btn btn-sm btn-success">
                <i class="fas fa-save me-1"></i> Salvar
            </button>
        </div>
        </form>
    </div>
@endsection
