<!DOCTYPE html>

<html>
    <?php require '../views/header.php'; ?>
    <?php
        $disciplinas = [
            [ 'nome' => 'Cálculo I', 'codigo' => 'MAT140', 'alunos' => '450', 'avaliacoes'=> '5'],
            [ 'nome' => 'Cálculo II', 'codigo' => 'MAT147', 'alunos' => '240', 'avaliacoes'=> '-1'],
            [ 'nome' => 'Cálculo III', 'codigo' => 'MAT241', 'alunos' => '70', 'avaliacoes'=> '7'],
            [ 'nome' => 'Programação I', 'codigo' => 'INF110', 'alunos' => '60', 'avaliacoes'=> '65'],
            [ 'nome' => 'Programação II', 'codigo' => 'INF112', 'alunos' => '60','avaliacoes'=> '21'],
            [ 'nome' => 'Estrutura de Dados', 'codigo' => 'INF213', 'alunos' => '60','avaliacoes'=> '12'],
            [ 'nome' => 'Engenharia de Software I', 'codigo' => 'INF221', 'alunos' => '36','avaliacoes'=> '25'],
            [ 'nome' => 'Física I', 'codigo' => 'FIS201', 'alunos' => '76', 'avaliacoes'=> '-7'],
            [ 'nome' => 'Organização de Computadores I', 'codigo' => 'INF251', 'alunos' => '40', 'avaliacoes'=> '-3'],
            [ 'nome' => 'Linguagens Formais e Autômatos', 'codigo' => 'INF330', 'alunos' => '27', 'avaliacoes'=> '9']
        ];
    ?>

    <body>
        <div class='container-fluid justify-content-center'>
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
                                <div class='row card-text'>
                                    <div class='col'>
                                        <p> <b>Código:</b> {$item['codigo']} </p>
                                        <p> <b>Alunos matrículados</b> {$item['alunos']} </p>
                                    </div>
                                    <div class='col' >
                                        <div style='float: right' align=center >
                                            <i class='fas fa-chevron-up' style='font-size: 25px'></i>
                                            <br><a>{$item['avaliacoes']}</a><br>
                                            <i class='fas fa-chevron-down' style='font-size: 25px'></i>
                                        </div>
                                    </div>
                                </div>
                                <a href='/INF221/pages/avaliacao_disciplina.php?disciplina={$item["codigo"]}' class='mt-auto card-link btn btn-primary' role='button' style='float: 'bottom' '>Avaliar</a>
                            </div>
                        </div>
                        ";
                }
            ?>
        </div>
    </body>
</html>
