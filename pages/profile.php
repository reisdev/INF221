
<!DOCTYPE html>
<html>
    <?php require('../views/header.php'); ?>
    <body>
        <?php
            $usuario = ['nome' => 'Eduardo Moreira Júnior','birthday' => '20-06-2018', 'CPF' => '1921548239102'];
        ?>
        <div class='container'>
            <p class='display-4' style='font-size: 40px'> Dados do usuário </p> <br>
            <div class='card'>
                <div class='card-body' width='100%'>
                        <div class="profile-header-img">
                            <img class="img-circle" src="../src/images/profile.jpg" />
                            <div style='vertical-align: middle'>
                                <p><b>Nome do Usuário:</b> <?php echo $usuario['nome']; ?></p>
                                <p><b>Data de nascimento:</b> <?php echo $usuario['birthday']; ?></p>
                                <p><b>ID do Facebook:</b> <?php echo $usuario['CPF']; ?></p>
                            </div>
                        </div>
                </div>
            </div>

            
        </div>
    </body>
</html>
