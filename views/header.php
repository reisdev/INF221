<!DOCTYPE html>

<?php

?>

<style>
    .nav-link{
        color: rgba(255,255,255,.5)
    }
    .nav-link:hover{
        color: rgba(255,255,255,.8)
    }
</style>

<nav class='navbar navbar-expand-lg navbar-dark bg-dark' align='center'>
    <a class='navbar-brand' href='/'> SAD </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarText" aria-controls="navbarText" 
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id='navbarText' class='collapse navbar-collapse'>
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
        <div>
            <a class="nav-link" href="?page=user">Minha conta</a>
        </div>
    </div>
</nav>
