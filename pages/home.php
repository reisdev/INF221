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

// function test_post(){
//     $.ajax({
//         type: 'post',
//         url: 'http://localhost:8000/api/avaliacoes',
//         data: {
//             "disciplina": "MAT271",
//             "avaliador": "Eduardo",
//             "descricao": "deeu",
//             "professor": "Sei la",
//             "nota": 7.2,
//             "facilidade": 1,
//             "utilidade": 1,
//             "recomendacao": 0
//         },
//         success: function(data){
//             console.log(data);
//         }
//     });
//     return false;
// }

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

    if (isset($_GET['pesquisa'])) {
        $pesquisa = $_GET['pesquisa'];
    } else {
        $pesquisa = '';
    }

    $json = file_get_contents('http://localhost:8000/api/disciplinas');
    $disciplinas = json_decode($json, true);

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
