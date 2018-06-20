<!DOCTYPE html>
<html>
<head>
    <title> SAD - Sistema de Avaliação de Disciplinas </title>
    <script src='src/js/jquery-3.3.1.min.js'></script>
    <script src='src/js/bootstrap.bundle.min.js'></script>
    <script src='src/js/bootstrap.min.js'></script>
    <script src='src/js/popper.min.js'></script>
    <link rel='shorcut icon' type='image/x-icon' href='./favicon.ico'>
    <link rel='stylesheet' href='src/css/style.css'>
    <link rel='stylesheet' href='src/css/bootstrap.min.css'>
    <link rel='stylesheet' href='src/css/bootstrap-grid.min.css'>
    <link rel='stylesheet' href='src/css/bootstrap-reboot.min.css'>
</head>
<body>
    <header> 
        <?php require 'views/header.php'; ?>
    </header>

<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

//Switch pras rotas
switch ($_SERVER['QUERY_STRING']) {
    case 'page=home':
        require('views/pages/home.php');
        break;
    case 'page=user':
        require('views/pages/user.php');
        break;
    case 'page=disciplinas':
        require('views/pages/disciplinas.php');
        break;
    default:
        # code...
        break;
}

?>
</body>
</html>
