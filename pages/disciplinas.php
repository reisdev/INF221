<!DOCTYPE html>

<html>
    <?php include('../views/header.php'); ?>
    <?php
        $search_on = 0;
        if(!empty($_POST["nome"])){
            $search = $_POST["nome"];
            $search_on = 1;
        }
        $disciplinas = [
            [ 'nome' => 'Cálculo I', 'codigo' => 'MAT140', 'alunos' => '450'],
            [ 'nome' => 'Programação I', 'codigo' => 'INF110', 'alunos' => '60'],
            [ 'nome' => 'Engenharia de Software I', 'codigo' => 'INF221', 'alunos' => '36'],
            [ 'nome' => 'Física I', 'codigo' => 'FIS201', 'alunos' => '76'],
            [ 'nome' => 'Organização de Computadores I', 'codigo' => 'INF251', 'alunos' => '40']
        ];
    ?>

    <body>
        <div class='container-fluid'>
            <?php
                try {
                    if(isset($_POST['nome']) && $_POST['nome'] !== ""){
                        $disciplinas = array_filter( $disciplinas, function ( $item ) {
                            if(stripos($item['nome'], $_POST['nome']) !== false || stripos($item['codigo'], $_POST['nome']) !== false) {
                                return true;
                            }
                            return false;
                        });
                    }
                }
                catch(Exception $error){
                    echo $error;
                }
                foreach($disciplinas as $item){
                    echo "
                        <div class='card card-disciplina'>
                            <div class='d-flex flex-column card-body mt-auto'>
                                <h5 class='card-title'> {$item['nome']} </h5>
                                <div class='card-text'>
                                    <p> <b>Código:</b> {$item['codigo']} </p>
                                    <p> <b>Alunos matrículados</b> {$item['alunos']} </p>
                                </div>
                                <a class='mt-auto card-link btn btn-primary' data-toggle='collapse' role='button' data-target='#{$item['codigo']}' style='float: 'bottom' '>Avaliar</a>
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
