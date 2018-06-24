<!DOCTYPE html>

<html>
    <?php include('../views/header.php'); ?>
    <body>
    <?php
        if(!empty($_GET["disciplina"])){
            $disciplina = $_GET["disciplina"];
            echo "<h3 class='form-control' align=center> Resumo da disciplina {$disciplina} </h3>";
        }
    ?>

    <?php
        $usuario = ['nome' => 'Eduardo Moreira Júnior','birthday' => '20-06-2018', 'CPF' => '1921548239102'];
        $dissert = "Chamada oral, três provas valendo 100 pontos. Professor explica bem, pórem tem uma correção uma pouco pesada
, mas nada que se estudar direitinho não dê para passar :=)";
    ?>

    <div class="container">
        <div class='card card-resumo'>
            <div class='card'>
                    <div class='card-body' width='100%'>
                            <div class="profile-header-img">
                                <img class="img-circle" src="../src/images/profile.jpg" />
                                <div style='vertical-align: middle'>
                                    <p><b>Nome do Usuário:</b> <?php echo $usuario['nome']; ?></p>
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
                            <div>
                                <a href='' class='mt-auto card-link btn btn-primary' role='button' style='float: 'bottom' ' >Editar</a>
                            </div>
                    </div>
                </div>
        </div>
    </div>


</html>