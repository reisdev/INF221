<!DOCTYPE html>

<nav class='navbar navbar-expand-lg navbar-dark bg-danger' align='center'>
    <a class='navbar-brand' href='/'> SAD </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div id='navbarText' class='collapse navbar-collapse '>
        <!-- Barra de pesquisa que aparece para celulares -->
        <ul class="nav navbar-nav d-none d-md-block d-lg-none">
            <li class="nav-item">
                <input class="nav-search" type="text" placeholder="Pesquisar..">
            </li>
        </ul>

        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="?page=home">
                    Página Inicial <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=disciplinas">Disciplinas</a>
            </li>
        </ul>
        <ul class="nav navbar-nav d-none d-lg-block">
            <li class="nav-item">
                <img src="src/images/facebook.png" width="201" height="30" class="img-fluid" href="?page=user">
            </li>
        </ul>
        <div>
            <a class="nav-link" href="?page=user">Minha conta</a>
        </div>

        <!-- Barra de pesquisa que aparece para pcs+ -->
        <ul class="nav navbar-nav d-none d-lg-block">
            <li class="nav-item">
                <input class="nav-search" type="text" placeholder="Pesquisar..">
            </li>
        </ul>

    </div>

</nav>
