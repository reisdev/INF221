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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id="body-style">
        <header>
            <?php require 'views/header.php'; ?>
        </header>
        <?php
        ini_set('display_startup_errors', 1);
        ini_set('display_errors', 1);
        error_reporting(-1);
        header('Location: http://localhost/INF221/views/pages/home.php');
        ?>
    </body>
</html>
