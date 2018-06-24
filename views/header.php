<!DOCTYPE html>

<head>
        <title> SAD - Sistema de Avaliação de Disciplinas </title>
        <link rel='shorcut icon' type='image/x-icon' href='../favicon.ico'>
        
        <script src='../src/js/jquery-3.3.1.min.js'></script>
        <script src='../src/js/bootstrap.bundle.min.js'></script>
        <script src='../src/js/bootstrap.min.js'></script>
        <script src='../src/js/popper.min.js'></script>

        <link rel='stylesheet' href='../src/css/style.css'>
        <link rel='stylesheet' href='../src/css/bootstrap.min.css'>
        <link rel='stylesheet' href='../src/css/bootstrap-grid.min.css'>
        <link rel='stylesheet' href='../src/css/bootstrap-reboot.min.css'>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<header>
    <script>
        const openModal = () => {
            $('#modalLogin').modal('toggle')
        }
    </script>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark' align='center'>
        <a class='navbar-brand' href='/'> SAD </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarText" aria-controls="navbarText"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id='navbarText' class='collapse navbar-collapse '>
            <ul class="navbar-nav mr-auto">
                <!-- Barra de pesquisa que aparece para celulares -->
                <li class="nav-item d-md-block d-lg-none">
                    <form class="my-lg-0" style='width: 80%; display: inline-flex'>
                        <input class="form-control my-2 my-sm-0" type="search" placeholder="Digite sua pesquisa"
                            aria-label="Search" style='height: 38px; padding: .375rem .75rem; margin: 8px 0 8px 0'>
                        <button class="btn btn-outline-primary my-2 my-sm-0" fontColor='black' type="submit">Pesquisar</button>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/INF221/pages/home.php">
                        Página Inicial <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/INF221/pages/disciplinas.php">Disciplinas</a>
                </li>
            </ul>
            <ul class='navbar-nav'>
                <?php
                if(!isset($_SESSION['user']) ) {
                    echo "<li class='nav-item'>
                        <button class='btn btn-primary' style='margin-left: 10px; margin-right: 10px;' class='nav-link' onclick='openModal()' href='http://localhost/INF221/pages/user.php'>Minha conta</button>
                    </li>";
                }
                ?>
                <!-- Barra de pesquisa para computadores -->
                <li class='nav-item d-none d-lg-block'>
                    <form class="form-inline my-2 my-lg-0" action='../pages/disciplinas.php' method='POST'>
                        <input name='nome' id="nome" class="form-control mr-sm-2" type="search" placeholder="Digite a disciplina desejada..." aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" fontColor='black' type="submit">Pesquisar</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body>
    <div class="modal fade" id='modalLogin' tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Faça login com sua conta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class='form-group'>
                        <label>Email</label>
                        <input class='form-control' type='email'/>
                    </div>
                    <div class='form-group'>
                        <label>Senha</label>
                        <input class='form-control' type='password'/>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success">Entrar</button>
            </div>
            </div>
        </div>
    </div>
</body>
