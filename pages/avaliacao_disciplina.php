<!DOCTYPE html>

<html>
    <?php require '../views/header.php'; ?>
    <body>
    <?php
    if (!empty($_GET["disciplina"]) ) {
        $disciplina = $_GET["disciplina"];
        echo "<h3 class='form-control' align=center> Avaliação da disciplina {$disciplina} </h3>";
    }
    ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <label> Avaliação: </label>
                <img src="../src/images/rating-star.jpg" width=105px >
                <br>
                <div class="form-group">
                    <label for="dissertacao">Dissertação:</label>
                    <small class="form-text text-muted">Tente explicar os métodos de avaliação, controle de presença, entre outros detalhes.</small>
                    <textarea class="form-control" rows="5" id="dissertacao"></textarea>
                </div>
        </div>

        <div class="col-md-6">
            <fieldset class="form-group row">
            <div class="col-sm-10">
                <div class="form-check">
                    <label> Esta disciplina é fácil? </label> 
                    <label class="form-check-label row">
                        <div class="col-sm-2">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        Sim
                        </div>
                        <div class="col-sm-2">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        Não
                        </div>
                    </label>
                </div>
                <div class="form-check">
                    <label> Esta disciplina é útil? </label> 
                    <label class="form-check-label row">
                        <div class="col-sm-2">
                        <input class="form-check-input" type="radio" name="gridRadiosb" id="gridRadios3" value="option3" checked>
                        Sim
                        </div>
                        <div class="col-sm-2">
                        <input class="form-check-input" type="radio" name="gridRadiosb" id="gridRadios4" value="option4">
                        Não
                        </div>
                    </label>
                </div>
                <div class="form-check">
                    <label> Você recomenda essa disciplina? </label> 
                    <label class="form-check-label row">
                        <div class="col-sm-2">
                        <input class="form-check-input" type="radio" name="gridRadiosc" id="gridRadios5" value="option5" checked>
                        Sim
                        </div>
                        <div class="col-sm-2">
                        <input class="form-check-input" type="radio" name="gridRadiosc" id="gridRadios6" value="option6">
                        Não
                        </div>
                    </label>
                </div>
            </div>
            </fieldset>
        </div>
    </div>
    <div align=center>
        <a href='/INF221/pages/avaliacao_disciplina.php' class='mt-auto card-link btn btn-primary' role='button' style='float: 'bottom' ' >Avaliar</a>
    </div>
</div>


    </body>
</html>