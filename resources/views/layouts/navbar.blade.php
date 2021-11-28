<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Laravel Recursos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">
                <i class="fas fa-home me-1"></i>Home
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user-friends me-1"></i>Usuários
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                  <a class="dropdown-item" href="{{route('usuarios.index')}}">
                    Lista de Usuários
                  </a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                  <a class="dropdown-item" href="{{route('pdfs')}}">
                    <i class="fas fa-file-pdf me-1"></i>Relatórios
                 </a>
             </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-id-card-alt me-1"></i>Funcionários
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                  <a class="dropdown-item" href="{{route('funcionarios.index')}}">
                    Lista de Funcionários
                  </a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                  <a class="dropdown-item" href="{{route('pdfs')}}">
                    <i class="fas fa-file-pdf me-1"></i>Relatórios
                 </a>
             </li>
            </ul>
          </li>
         </ul>
        <div class="d-flex">
            <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{session('lvrecursos')->nome}}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{route('usuario.perfil')}}">
                            <i class="fas fa-address-card me-1"></i>Perfil
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{route('logout')}}">
                            <i class="fas fa-sign-out-alt me-1"></i>Log Out
                        </a>
                    </li>
                  </ul>
                </li>
               </ul>
        </div>
      </div>
    </div>
  </nav>
