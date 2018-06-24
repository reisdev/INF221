
<!DOCTYPE html>
<html>
    <?php require('../views/header.php'); ?>
    <body>
        <?php

            $usuarios = [
                [ 'nome' => 'Matheus Paulista', 'birthday' => '20-06-2018', 'CPF' => '1921548239102', 'foto' => "../src/images/profile2.jpg"],
                [ 'nome' => 'Matheus Negro1', 'birthday' => '21-06-2018', 'CPF' => '1921548239102', 'foto' => "../src/images/profile3.jpg"],
                [ 'nome' => 'Matheus Negro2', 'birthday' => '22-06-2018', 'CPF' => '1921548239102', 'foto' => "../src/images/profile3.jpg"],
                [ 'nome' => 'Matheus Negro3', 'birthday' => '23-06-2018', 'CPF' => '1921548239102', 'foto' => "../src/images/profile3.jpg"]
            ];
            if(!empty($_GET['nome'])){
                foreach($usuarios as $item){
                    if ($item['nome'] == $_GET['nome'])
                        $usuario = $item;
                }
            }


        ?>
        <div class='container'>
            <p class='display-4' style='font-size: 40px'> Dados do usuário </p> <br>
            <div class='card'>
                <div class='card-body' width='100%'>
                        <div class="profile-header-img">
                            <img class="img-circle" src="<?php echo $usuario['foto']; ?>" />
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
