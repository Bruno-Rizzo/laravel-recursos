@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <i class="fas fa-user-friends me-1"></i>Lista de Usuários
        </div>
        <div class="card-body">
            <div class="mb-3">
                <a href="{{route('usuarios.create')}}" class="btn btn-sm btn-success">
                    <i class="fas fa-user-plus me-1"></i>Novo Usuário
                </a>
            </div>
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Sexo</th>
                    <th class="text-center">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($usuarios as $u)
                    <tr>
                        <td>{{$u->id}}</td>
                        <td>{{$u->nome}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->sexo}}</td>
                        <td class="text-center">
                            <a href="{{route('usuarios.edit',$u->id)}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="{{route('usuario.confirm',$u->id)}}" class="btn btn-sm btn-danger">Excluir</a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{$usuarios->links()}}
        </div>
    </div>

@endsection
