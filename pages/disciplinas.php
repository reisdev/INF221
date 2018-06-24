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
            [ 'nome' => 'Organização de Computadores I', 'codigo' => 'INF251', 'alunos' => '40'],
            [ 'nome' => 'Linguagens Formais e Autômatos', 'codigo' => 'INF330', 'alunos' => '27']
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
<<<<<<< HEAD
                                <a href='/INF221/pages/avaliacao_disciplina.php?disciplina={$item["codigo"]}' class='mt-auto card-link btn btn-primary' role='button' style='float: 'bottom' '>Avaliar</a>
                                </div>
=======
                                <a class='mt-auto card-link btn btn-primary' style='float: 'bottom' '>Avaliar</a>
>>>>>>> a915c41feaa912c5c170dfc899b5c68f3593cfc6
                            </div>
                        </div>
                        ";
                }
            ?>
        </div>
    </body>
</html>
