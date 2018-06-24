
<!DOCTYPE html>
<html>
    <head>
        <title> SAD - Sistema de Avaliação de Disciplinas </title>
        <script src='../../src/js/jquery-3.3.1.min.js'></script>
        <script src='../../src/js/bootstrap.bundle.min.js'></script>
        <script src='../../src/js/bootstrap.min.js'></script>
        <script src='../../src/js/popper.min.js'></script>
        <link rel='shorcut icon' type='image/x-icon' href='./favicon.ico'>
        <link rel='stylesheet' href='../../src/css/style.css'>
        <link rel='stylesheet' href='../../src/css/bootstrap.min.css'>
        <link rel='stylesheet' href='../../src/css/bootstrap-grid.min.css'>
        <link rel='stylesheet' href='../../src/css/bootstrap-reboot.min.css'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            require('../header.php');
            $usuario = ['nome' => 'Eduardo Moreira Júnior','birthday' => '20-06-2018'];
        ?>  
        <div class='container'>
            <p class='display-4' style='font-size: 40px'> Dados do usuário </p> <br>
            <div class='card card-body'>
                <p><b>Nome do Usuário:</b> <?php echo $usuario['nome']; ?>
                <p><b>Data de nascimento:</b> <?php echo $usuario['birthday']; ?>
            </div>
        </div>
    </body>
</html>
