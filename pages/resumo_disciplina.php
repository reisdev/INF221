<!DOCTYPE html>

<html>
    <?php require '../views/header.php'; ?>
    <body>
    <?php
        $usuario = [['nome' => 'Eduardo Moreira Júnior','birthday' => '20-06-2018', 'CPF' => '1921548239102'],
                    ['nome' => 'Mateus Armond Santos','birthday' => '06-01-2018', 'CPF' => '192585256539102'],
                    [ 'nome' => 'Matheus Negro1', 'birthday' => '21-06-2018', 'CPF' => '1921548239102']
                    ];

        $dissert = "Chamada oral, três provas valendo 100 pontos. Professor explica bem, pórem tem uma correção uma pouco pesada
, mas nada que se estudar direitinho não dê para passar :=)";
        $dissert2 = "Fuja! Explica mal e tem mão muito pesada!!!";
    ?>

    <div class="container-fluid" style='margin-bottom: 20px'>
        <div class='card'>
        <div class='card-body' >
        <?php
        if(!empty($_GET["disciplina"])){
            $disciplina = $_GET["disciplina"];
            echo "<h3 class='display-4' align='center' style='padding-bottom: 20px; font-size: 40px;'> Resumo da disciplina {$disciplina} </h3>";
        }
        ?>
        <!-- Editável se usuário logado -->
        <div class="card card-resumo">
            <img class="card-img-top card-img-resumo" src="../src/images/profile.jpg" alt="Card image cap">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <p><b>Nome do Usuário:</b> <?php echo $usuario[0]['nome']; ?></p>
                    </div>
                    <div class="col-md-2 justify-content-center">
                        <img width=25px src="../src/images/class-arrow-up.png"> <!-- botão -->
                        <br><a style='padding-left:7px'> 4 </a><br>
                        <img width=25px src="../src/images/class-arrow-down.png"> <!-- botão -->
                    </div>
                </div>
                <label> Avaliação: </label>
                <img src="../src/images/rating-star.jpg" width=105px >
                <div>
                    <div class="form-group">
                        <label for="dissertacao">Dissertação:</label>
                        <textarea class="form-control" rows="5" id="dissertacao"> <?php echo $dissert; ?> </textarea>
                    </div>
                </div>
                <a href="#" class="btn btn-primary">Editar</a>
            </div>
        </div>
        <!-- Não editável -->
        <div class="card card-resumo">
            <img class="card-img-top card-img-resumo" src="../src/images/profile2.jpg" alt="Card image cap">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <p><b>Nome do Usuário:</b> <?php echo $usuario[1]['nome']; ?></p>
                    </div>
                    <div class="col-md-2 justify-content-center">
                        <img width=25px src="../src/images/class-arrow-up.png"> <!-- botão -->
                        <br><a style='padding-left:3px'> 32 </a><br>
                        <img width=25px src="../src/images/class-arrow-down.png"> <!-- botão -->
                    </div>
                </div>
                <label> Avaliação: </label>
                <img src="../src/images/rating-star.jpg" width=105px >
                <div>
                    <label for="dissertacao">Dissertação:</label>
                    <p> <?php echo $dissert; ?> </p>
                </div>
            </div>
        </div>

        <div class="card card-resumo">
            <img class="card-img-top card-img-resumo" src="../src/images/profile3.jpg" alt="Card image cap">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <p><b>Nome do Usuário:</b> <?php echo $usuario[2]['nome']; ?></p>
                    </div>
                    <div class="col-md-2 justify-content-center">
                        <img width=25px src="../src/images/class-arrow-up.png"> <!-- botão -->
                        <br><a> -13 </a><br>
                        <img width=25px src="../src/images/class-arrow-down.png"> <!-- botão -->
                    </div>
                </div>
                <label> Avaliação: </label>
                <img src="../src/images/rating-star.jpg" width=105px >
                <div>
                    <label for="dissertacao">Dissertação:</label>
                    <p> <?php echo $dissert2; ?> </p>
                </div>
            </div>
        </div>
        <div align='center'>
            <a href='' class='mt-auto card-link btn btn-primary' role='button' style='float:bottom' >Carregar mais...</a>
        </div>
    </div>
</body>
</html>