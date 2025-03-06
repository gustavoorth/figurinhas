<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false"
        aria-label="Toggle Navigation">
        <span class="navbar-toggle-icon">
            <span class="toggle-line"></span>
        </span>
    </button>
    <a class="navbar-brand me-1 me-sm-3" href="./">
        <div class="d-flex align-items-center">
            <span class="text-black">LISERF</span></span>
        </div>
    </a>
    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./" role="button">Meu Álbum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./pacotes.php" role="button">Pacotes</a>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="./imagens/sem-avatar.webp" alt="Avatar">
                </div>
            </a>
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" style="cursor: default; pointer-events: none;" href="javascript:void(0);">
                        <span>Sem nome ainda</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="./minha-conta.php">Minha conta</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="./login.php">Sair</a>
                </div>
            </div>
        </li>
    </ul>
</nav>