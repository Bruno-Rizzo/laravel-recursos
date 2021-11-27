<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Recursos</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/css/all.min.css')}}">
    <style>
        body{
            background-color: #EEE;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 15em;
        }
    </style>
</head>
<body>

    <div class="login col-lg-4">
        <div class="card">
            <div class="card-header text-white bg-primary text-center">
                <h5>Laravel Recursos</h5>
            </div>
            <div class="card-body">
                <form method="POST">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="text" class="form-control" name="email" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha" >
                      </div>
                    <div class="d-grid gap-2 mb-3">
                        <button type="submit" class="btn btn-info">
                           <i class="fas fa-sign-in-alt me-1"></i> Log In
                        </button>
                    </div>
                  </form>
                  <p class="mt-2 text-center text-danger">{{Session::get('erro')}}</p>
            </div>
        </div>
    </div>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
