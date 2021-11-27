@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <i class="fas fa-home me-1"></i>Home
        </div>
        <div class="card-body d-flex row justify-content-evenly">
            <div class="col-lg-5">
                Quantidade de Usuários
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                            <div class="card-body">
                                <i class="fas fa-user-friends fa-7x me-1"></i>
                                <span style="font-size: 70px"> {{$usuarios}}</span>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                Gráfico de Usuários
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="bg-white rounded shadow" style="width: 400px">
                            {!! $chart->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}

@endsection
