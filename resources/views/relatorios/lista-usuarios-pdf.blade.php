<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Usuários</title>
    <style>
         @page{
            margin: 0cm 0cm;
        }
        body{
            margin-left: 1cm;
            margin-right: 1cm;
            margin-top: 1cm;
            font-family: Arial, Helvetica, sans-serif;
        }
        #texto_topo{
            color:#777;
            font-size: 20px;
        }
        tr:nth-child(even){
            background-color: #DDD;
        }
        .table{
            border-collapse: collapse;
            margin-top: 15px;
        }
        .table th{
            border: 1px solid grey;
            padding-left: 5px;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: #416994;
            color: #FFF;
        }
        .table td{
            border: 1px solid grey;
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 4px;
            padding-bottom: 4px;
            color: #555;
        }
    </style>
</head>

<body>
    <span id="texto_topo">Lista de Usuários</span>
    <hr style="color:#777">
    <table width="100%" class="table">
        <thead>
          <tr>
            <th>#</th>
            <th style="text-align: left">Nome</th>
            <th style="text-align: left">Email</th>
            <th style="text-align: left">Sexo</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($usuarios as $u)
            <tr>
                <td style="text-align: center">{{$u->id}}</td>
                <td>{{$u->nome}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->sexo}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
