<!DOCTYPE html>

<?php
    $disciplinas = [
        [ 'nome' => 'Cálculo I', 'codigo' => 'MAT140', 'alunos' => '450'],
        [ 'nome' => 'Programação I', 'codigo' => 'INF110', 'alunos' => '60'],
        [ 'nome' => 'Engenharia de Software I', 'codigo' => 'INF221', 'alunos' => '36']
    ];
?>

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
                        <a class='card-link btn btn-primary' data-toggle='collapse' data-target='#collapse{$item['codigo']}'>Avaliar</a>

                        <div style='margin: 0px 0px 30px 0px' id='collapse{$item['codigo']}' class='collapse'>
                        Avaliação: <br>
                        <img src='src/images/rating-star.jpg' width='120' class='img-fluid' href='?page=user'> <br>
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
