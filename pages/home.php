<!DOCTYPE html>
<head>
        <script src='../src/js/jquery-3.3.1.min.js'></script>
        <script src='../src/js/bootstrap.bundle.min.js'></script>
        <script src='../src/js/bootstrap.min.js'></script>
        <script src='../src/js/popper.min.js'></script>
</head>
<script>
function send_value() {
    $.ajax({
        type: 'post',
        url: 'http://localhost:8000/api/disciplinas',
        data: {
            "codigo": "MAT211",
            "nome": "Calculo",
            "semestre": 1, // 1 ou 2
            "departamento": "Mat"
        },
        success: function (data) {
            console.log(data);
        }
    });
    return false;
}

function changePositive(id, id2){
    if( document.getElementById(id).style.color == "green")
        document.getElementById(id).style.color = "black"; // forecolor
    else
        document.getElementById(id).style.color = "green";
    document.getElementById(id2).style.color = "black";

}
function changeNegative(id, id2){
    if( document.getElementById(id).style.color == "red")
        document.getElementById(id).style.color = "black"; // forecolor
    else
        document.getElementById(id).style.color = "red";
    document.getElementById(id2).style.color = "black";
}
</script>
<?php
    require_once '../src/modules/functions.php';

    // $disciplinas = [
    //     [ 'nome' => 'Cálculo I', 'codigo' => 'MAT140', 'alunos' => '450', 'avaliacoes'=> '5'],
    //     [ 'nome' => 'Cálculo II', 'codigo' => 'MAT147', 'alunos' => '240', 'avaliacoes'=> '-1'],
    //     [ 'nome' => 'Cálculo III', 'codigo' => 'MAT241', 'alunos' => '70', 'avaliacoes'=> '7'],
    //     [ 'nome' => 'Programação I', 'codigo' => 'INF110', 'alunos' => '60', 'avaliacoes'=> '65'],
    //     [ 'nome' => 'Programação II', 'codigo' => 'INF112', 'alunos' => '60','avaliacoes'=> '21'],
    //     [ 'nome' => 'Estrutura de Dados', 'codigo' => 'INF213', 'alunos' => '60','avaliacoes'=> '12'],
    //     [ 'nome' => 'Engenharia de Software I', 'codigo' => 'INF221', 'alunos' => '36','avaliacoes'=> '25'],
    //     [ 'nome' => 'Física I', 'codigo' => 'FIS201', 'alunos' => '76', 'avaliacoes'=> '-7'],
    //     [ 'nome' => 'Organização de Computadores I', 'codigo' => 'INF251', 'alunos' => '40', 'avaliacoes'=> '-3'],
    //     [ 'nome' => 'Linguagens Formais e Autômatos', 'codigo' => 'INF330', 'alunos' => '27', 'avaliacoes'=> '9']
    // ];
    if (isset($_GET['pesquisa'])) {
        $pesquisa = $_GET['pesquisa'];
    } else {
        $pesquisa = '';
    }
    // if (isset($_GET['filtro'])) {
    //     switch ($_GET['filtro']) {
    //         case 'aval':
    //             $disciplinas = array_sort($disciplinas, 'avaliacoes', SORT_DESC);
    //             break;
    //     }
    // }

    $json = file_get_contents('http://localhost:8000/api/disciplinas');
    $disciplinas = json_decode($json, true);
    print_r($disciplinas[0]);
    
?>



<html>
    <?php require '../views/header.php'; ?>
    <body>
        <div class='container-fluid list'>
            <div class='card'>
                <div class='card-body'>
                    <div align='center'>
                        <form action='' method='get'style='padding-top: 20px; display: inline-flex; width: 80%; '>
                            <div class='form-group' style='padding-right: 20px; width: 80%;'>
                                <label> Pesquisa </label>
                                <input class='form-control' placeholder='Digite a pesquisa desejada'
                                                            value='<?php echo $pesquisa; ?>'
                                                            type='text' name='pesquisa'>
                            </div>
                            <div class='form-group' style='padding-right: 20px;'>
                                <label> Filtrar por </label>
                                <select class='custom-select' name='filtro'>
                                    <option value='aval'> Por avaliações </option>
                                    <option value=''> </option>
                                </select>
                            </div>
                            <button class='btn btn-primary' style='height: fit-content; margin-top: 32px' type='submit'>Buscar</button>
                        </form>
                    </div>
                    <div class='container-fluid justify-content-center'>
                    <?php
                        try {
                            if(isset($_GET['pesquisa']) && $_GET['pesquisa'] !== ""){
                                $disciplinas = array_filter( $disciplinas, function ( $item ) {
                                    if(stripos($item['nome'], $_GET['pesquisa']) !== false || stripos($item['codigo'], $_GET['pesquisa']) !== false) {
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
                                                <p> <b>Semestre:</b> {$item['semestre']} </p>
                                            </div>
                                        </div>
                                        <a href='/INF221/pages/avaliacao_disciplina.php?disciplina={$item["codigo"]}' class='mt-auto card-link btn btn-primary' role='button' style='float: 'bottom' '>Avaliar</a>
                                    </div>
                                </div>
                                ";
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
