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
        <header>
            <?php require('../header.php'); ?>
        </header>
    <?php
        $disciplinas = [
            [ 'nome' => 'Cálculo I', 'codigo' => 'MAT140', 'alunos' => '450'],
            [ 'nome' => 'Programação I', 'codigo' => 'INF110', 'alunos' => '60'],
            [ 'nome' => 'Engenharia de Software I', 'codigo' => 'INF221', 'alunos' => '36']
        ];
    ?>
    <body>
        <div class='d-flex container justify-content-center'>
            <?php
                foreach($disciplinas as $item){
                    echo "
                        <div class='card card-disciplina'>
                            <div class='card-body'>
                                <h5 class='card-title'> {$item['nome']} </h5>
                                <div class='card-text'>
                                    <p> <b>Código:</b> {$item['codigo']} </p>
                                    <p> <b>Alunos matrículados</b> {$item['alunos']} </p>
                                </div>
                                <a class='card-link btn btn-primary' data-toggle='collapse' role='button' data-target='#{$item['codigo']}'>Avaliar</a>
                                <div style='margin: 0px 0px 30px 0px' id='{$item['codigo']}' class='collapse' aria-expanded='true' aria-labelledby='{$item['codigo']}'>
                                Avaliação: <br>
                                <img src='/INF221/src/images/rating-star.jpg' width='120' class='img-fluid' href='?page=user'> <br>
                                <label for='textarea'> Dissertação: </label>
                                <form action='myform.cgi'>
                                    <textarea name='textarea' style='width:100%;height:150px;max-height:300px;' maxlength='5000'></textarea>
                                    <br><input style='float: right;' class='card-link btn btn-primary' type='submit' value='Enviar'>
                                </form>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>
        </div>
    </body>
</html>
