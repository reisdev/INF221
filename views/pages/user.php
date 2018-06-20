<!DOCTYPE html>

<?php
    $usuario = ['nome' => 'Eduardo Moreira Júnior','birthday' => '02-06-2018'];
?>

<div class='container'>
    <p class='display-4' style='font-size: 40px'> Dados do usuário </p> <br>
    <div class='card card-body'>
        <p><b>Nome do Usuário:</b> <?php echo $usuario['nome']; ?>
        <p><b>Data de nascimento:</b> <?php echo $usuario['birthday']; ?>
    </div>
</div>