<?php 
    session_start();

    unset($_SESSION['email']);
    unset($_SESSION['pass']);
    unset($_SESSION['logado']);

    header('Location: http://localhost/INF221');
?>