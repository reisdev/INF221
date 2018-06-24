<!DOCTYPE html>
<?php
    $usuarios = [
        [ 'nome' => 'Matheus Paulista', 'birthday' => '20-06-2018', 'CPF' => '1921548239102', 'foto' => "../src/images/profile2.jpg"],
        [ 'nome' => 'Matheus Negro1', 'birthday' => '21-06-2018', 'CPF' => '1921548239102', 'foto' => "../src/images/profile3.jpg"],
        [ 'nome' => 'Matheus Negro2', 'birthday' => '22-06-2018', 'CPF' => '1921548239102', 'foto' => "../src/images/profile3.jpg"],
        [ 'nome' => 'Matheus Negro3', 'birthday' => '23-06-2018', 'CPF' => '1921548239102', 'foto' => "../src/images/profile3.jpg"]
    ];
?>

<html>
    <?php require('../views/header.php'); ?>
    <body>
        <?php
            $usuario = ['nome' => 'Eduardo Moreira Júnior','birthday' => '20-06-2018', 'CPF' => '1921548239102'];
        ?>
        <div class='container-fluid'>
            <p class='display-4' style='font-size: 40px'> Dados do usuário </p> <br>
            <div class='card'>
                <div class='card-body'>
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

            <br><p class='display-4' style='font-size: 40px'> Amigos Conectados </p> <br>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                        $active = " active";
                        foreach($usuarios as $item){
                            echo "<div class='carousel-item" . $active. "'>";
                            echo "
                            <div class='card card-perfil' >
                                <div >
                                    <div class='card-body'>
                                        <div class='profile-header-img'>
                                            <img class='img-circle' src='{$item['foto']}' />
                                            <div style='vertical-align: middle'>
                                                <p><b>Nome do Usuário:</b> {$item['nome']} </p>
                                                <p><b>Data de nascimento:</b> {$item['birthday']}</p>
                                                <p><b>ID do Facebook:</b> {$item['CPF']}</p>
                                                <a href='/INF221/pages/profile.php?nome={$item['nome']}' class='mt-auto card-link btn btn-primary' role='button' style='float: 'bottom' '>Ver Perfil</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
                            echo "</div>";
                            $active = "";
                        }
                    ?>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:black"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:black"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
