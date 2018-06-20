<!DOCTYPE html>

<?php
    $disciplinas = [
        [ 'nome' => 'Cálculo I', 'codigo' => 'MAT140', 'alunos' => '450'],
        [ 'nome' => 'Programação I', 'codigo' => 'INF110', 'alunos' => '60'],
        [ 'nome' => 'Engenharia de Software I', 'codigo' => 'INF221', 'alunos' => '36']
    ];
?>

<div class='container'>
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
                        <a class='card-link btn btn-primary'>Avaliar</a>
                    </div>
                </div>
            ";
        }
    ?>
</div>
