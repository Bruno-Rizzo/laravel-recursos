@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <i class="fas fa-address-card me-1"></i> Perfil do Usuário
        </div>

        <div class="card-body">
            <table>
                <tr>
                    <td style="padding-right: 5px">Nome:</td>
                    <td>{{$usuario->nome}}</td>
                </tr>
                <tr>
                    <td style="padding-top: 5px">Email:</td>
                    <td>{{$usuario->email}}</td>
                </tr>
            </table>
            <hr>
            <p>Alterar Senha</p>
            <table>
                <form method="POST">
                @csrf
                <tr>
                    <td>Nova Senha:</td>
                    <td style="padding-bottom: 10px"><input type="password" class="form-control" name="senha"></td>
                    <td style="padding-left: 10px"><span class="text-danger">@error('senha') {{$message}} @enderror</span></td>
                </tr>
                <tr>
                    <td style="padding-right: 10px">Confirma Senha:</td>
                    <td><input type="password" class="form-control" name="senha_confirmation"></td>
                </tr>
            </table>
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
