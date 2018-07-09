<!DOCTYPE html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php
    echo $_GET['reco-dis'];
    $array1 = array($_GET['professor'],
                    $_GET['rating-av'], $_GET['user-comment'],
                    $_GET['rating-dis'], $_GET['rating-u'],
                    $_GET['reco-dis']);

    // echo '<script type="text/javascript">',
    // 'fgravaAvaliacao();',
    // '</script>';

?>

<?php
    echo "<button type='button' onclick='gravaAvaliacao()'>Testing Script</button>";
?>
<script >
    function fgravaAvaliacao(){
        alert("h1");

        var jArray =  <?php echo json_encode($array1); ?>;

        for(var i=0; i<jArray.length; i++){
            alert(jArray[i]);
        }
        alert("h");
    }
</script>

<script>
    function gravaAvaliacao() {
        var avaliacao =  <?php echo json_encode($array1); ?>;
        $.ajax({
            type: 'POST',
            url: 'http://localhost:8000/api/avaliacoes',
            data: {
                "disciplina": "MAT121",
                "avaliador": "Mateus",
                "descricao": "olagra",
                "professor": "avaliacao[0]",
                "nota": 1,
                "facilidade": 1,
                "utilidade": 2,
                "recomendacao": 1
            },
            success: function (data) {
                console.log(data);
            }
        });
        return false;
    }

    function gravaAvaliacao2() {
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
</script>