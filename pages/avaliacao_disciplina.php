<!DOCTYPE html>

<html>
    <?php require '../views/header.php'; ?>
    <link rel='stylesheet' href='../src/css/star-rating.css'>

<body>
<div class="container-fluid">
    <div class="card card-body">
        <?php
        if (!empty($_GET["disciplina"]) ) {
            $disciplina = $_GET["disciplina"];
            echo "<h3 class='display-4' align='center' style='padding-bottom: 20px; font-size: 40px;'> Avaliação da disciplina {$disciplina} </h3>";
        }
        ?>
    <form action="grava_avaliacao.php" method="get" id="dis-form">
        <div class='row'>
            <div class="col-md-6">

                <div class="form-group">
                    <label for="professor">Professor:</label>
                    <br><input type="text" name="professor"><br>
                </div>
                <div class="form-group">
                    <label for="dissertacao">Dissertação:</label>
                    <small class="form-text text-muted">Tente explicar os métodos de avaliação, controle de presença, entre outros detalhes.</small>
                    <textarea  name="user-comment" form="dis-form" class="form-control" rows="5" id="dissertacao"></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <fieldset class="form-group row">
                <div class="col-sm-10">
                    <div class="form-check">
                        <label> Avaliação: </label>
                        <label class="form-check-label row">
                            <div class="starrating risingstar d-flex justify-content-end flex-row-reverse">
                                <input type="radio" id="star5-av" name="rating-av" value="5" /><label for="star5-av" title="5 star">5</label>
                                <input type="radio" id="star4-av" name="rating-av" value="4" /><label for="star4-av" title="4 star">4</label>
                                <input type="radio" id="star3-av" name="rating-av" value="3" /><label for="star3-av" title="3 star">3</label>
                                <input type="radio" id="star2-av" name="rating-av" value="2" /><label for="star2-av" title="2 star">2</label>
                                <input type="radio" id="star1-av" name="rating-av" value="1" /><label for="star1-av" title="1 star">1</label>
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <label> Esta disciplina é fácil? </label>
                        <label class="form-check-label row">
                            <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                                <input type="radio" id="star5-dis" name="rating-dis" value="5" /><label for="star5-dis" title="5 star">5</label>
                                <input type="radio" id="star4-dis" name="rating-dis" value="4" /><label for="star4-dis" title="4 star">4</label>
                                <input type="radio" id="star3-dis" name="rating-dis" value="3" /><label for="star3-dis" title="3 star">3</label>
                                <input type="radio" id="star2-dis" name="rating-dis" value="2" /><label for="star2-dis" title="2 star">2</label>
                                <input type="radio" id="star1-dis" name="rating-dis" value="1" /><label for="star1-dis" title="1 star">1</label>
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <label> Esta disciplina é útil? </label>
                        <label class="form-check-label row">
                            <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                                <input type="radio" id="star5-u" name="rating-u" value="5" /><label for="star5-u" title="5 star">5</label>
                                <input type="radio" id="star4-u" name="rating-u" value="4" /><label for="star4-u" title="4 star">4</label>
                                <input type="radio" id="star3-u" name="rating-u" value="3" /><label for="star3-u" title="3 star">3</label>
                                <input type="radio" id="star2-u" name="rating-u" value="2" /><label for="star2-u" title="2 star">2</label>
                                <input type="radio" id="star1-u" name="rating-u" value="1" /><label for="star1-u" title="1 star">1</label>
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <label> Você recomenda essa disciplina? </label>
                        <label class="form-check-label row">
                            <div class="col-sm-2">
                            <input class="form-check-input" type="radio" name="reco-dis" id="gridRadios" value="sim" checked>
                            Sim
                            </div>
                            <div class="col-sm-2">
                            <input class="form-check-input" type="radio" name="reco-dis" id="gridRadios2" value="nao">
                            Não
                            </div>
                        </label>
                    </div>
                </div>
                </fieldset>
            </div>
        </div>
        <div align=center>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>


    </body>
</html>
