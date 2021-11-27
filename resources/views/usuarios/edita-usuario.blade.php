@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <i class="fas fa-user-edit me-1"></i> Edita Usuário
        </div>
        <form action="{{route('usuarios.update',$usuario->id)}}" method="POST">
            @csrf
            @method('PUT')
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{$usuario->nome}}">
                <span class="text-danger">@error('nome') {{$message}} @enderror</span>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="{{$usuario->email}}">
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>
            <div class="mb-3">
                <label class="form-label">Sexo</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" value="feminino" @if($usuario->sexo=='feminino') checked @endif>
                        <label class="form-check-label">
                        Feminino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" value="masculino"  @if($usuario->sexo=='masculino') checked @endif>
                        <label class="form-check-label">
                        Masculino
                        </label>
                    </div>
                    <span class="text-danger">@error('sexo') {{$message}} @enderror</span>
            </div>
         </div>
        <div class="card-footer">
            <a href="{{route('usuarios.index')}}" class="btn btn-sm btn-info">
                <i class="fas fa-undo me-1"></i> Voltar
            </a>
            <button type="submit" class="btn btn-sm btn-success">
                <i class="fas fa-save me-1"></i> Editar
            </button>
        </div>
        </form>
    </div>
@endsection
