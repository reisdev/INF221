<!DOCTYPE html>

<html>
    <?php require '../views/header.php'; ?>
    <?php
        $disciplinas = [
            [ 'nome' => 'Cálculo I', 'codigo' => 'MAT140', 'alunos' => '450'],
            [ 'nome' => 'Cálculo II', 'codigo' => 'MAT147', 'alunos' => '240'],
            [ 'nome' => 'Cálculo III', 'codigo' => 'MAT241', 'alunos' => '70'],
            [ 'nome' => 'Programação I', 'codigo' => 'INF110', 'alunos' => '60'],
            [ 'nome' => 'Programação II', 'codigo' => 'INF112', 'alunos' => '60'],
            [ 'nome' => 'Estrutura de Dados', 'codigo' => 'INF213', 'alunos' => '60'],
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
                                <h5 class='card-title'> <a href='/INF221/pages/resumo_disciplina.php?disciplina={$item["codigo"]}'> {$item['nome']} </a></h5>
                                <div class='card-text'>
                                    <p> <b>Código:</b> {$item['codigo']} </p>
                                    <p> <b>Alunos matrículados</b> {$item['alunos']} </p>
                                </div>
                                <a href='/INF221/pages/avaliacao_disciplina.php?disciplina={$item["codigo"]}' class='mt-auto card-link btn btn-primary' role='button' style='float: 'bottom' '>Avaliar</a>
                                </div>
                            </div>
                        </div>
                        ";
                }
            ?>
        </div>
    </body>
</html>
