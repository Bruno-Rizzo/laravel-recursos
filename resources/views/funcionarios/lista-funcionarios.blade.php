@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            Lista de Funcionários
        </div>
        <div class="card-body">
            <div class="mb-3">
                <a href="{{route('funcionarios.create')}}" class="btn btn-sm btn-success">
                    <i class="fas fa-circle-plus me-1"></i>Novo Funcionário
                </a>
            </div>
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th>Nome</th>
                    <th>Setor</th>
                    <th>Função</th>
                    <th class="text-center">Ações</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($funcionarios as $f)
                    <tr>
                        <td class="text-center"><img src="{{asset('images/'.$f->foto)}}" class="rounded-circle" width="40px" ></td>
                        <td class="align-middle">{{$f->nome}}</td>
                        <td class="align-middle">{{$f->setor}}</td>
                        <td class="align-middle">{{$f->funcao}}</td>
                        <td class="text-center align-middle">
                            <a href="{{route('usuarios.edit',$f->id)}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="{{route('usuario.confirm',$f->id)}}" class="btn btn-sm btn-danger">Excluir</a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

        </div>
    </div>

@endsection
