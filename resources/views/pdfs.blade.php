@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <i class="fas fa-file-pdf me-1"></i>Relatórios
        </div>
        <div class="card-body">
            <div>
                <a href="{{route('lista_todos_usuarios')}}" target="_blank" class="btn btn-sm btn-danger me-2">
                    <i class="fas fa-file-pdf"></i> Imprimir
                </a>
                Lista de Usuários
            </div>
            <hr>
        </div>
    </div>
@endsection
