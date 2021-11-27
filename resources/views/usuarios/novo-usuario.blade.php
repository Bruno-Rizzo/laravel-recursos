@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <i class="fas fa-user me-1"></i> Novo Usuário
        </div>
        <form action="{{route('usuarios.store')}}" method="POST">
            @csrf
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{old('nome')}}">
                <span class="text-danger">@error('nome') {{$message}} @enderror</span>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="{{old('email')}}">
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>
            <div class="mb-3">
                <label class="form-label">Sexo</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" value="feminino">
                        <label class="form-check-label">
                        Feminino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" value="masculino">
                        <label class="form-check-label">
                        Masculino
                        </label>
                    </div>
                    <span class="text-danger">@error('sexo') {{$message}} @enderror</span>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" value="{{old('senha')}}">
                <span class="text-danger">@error('senha') {{$message}} @enderror</span>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{route('usuarios.index')}}" class="btn btn-sm btn-info">
                <i class="fas fa-undo me-1"></i> Voltar
            </a>
            <button type="submit" class="btn btn-sm btn-success">
                <i class="fas fa-save me-1"></i> Salvar
            </button>
        </div>
        </form>
    </div>
@endsection
