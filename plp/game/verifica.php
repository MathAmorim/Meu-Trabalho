<?php
$idQuestao = $_GET['q'];
$pResposta = $_GET['w'];
/* $mysqli = new mysqli("localhost", "root", "", "auti");
if ($mysqli->connect_error) {
    exit('Could not connect');
}

$sql = "SELECT `idresposta`, `resposta` FROM `resposta` WHERE idresposta = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $resposta);
$stmt->fetch();
$stmt->close();
if ($resposta == $pResposta) { */
if ($pResposta == "a"){
    ?>
    <div class="col-12 result">
        <div class="col-12 ">
            <div class="col-12">
                <span class="col-3"></span>
                <h1 class="col-6 center"><i class="far fa-smile-beam"></i> Você Acertou!! <i class="far fa-smile-beam"></i></h1>
            </div>
            <span class="col-4"></span>
            <img class="col-4 iresult" src="../img/boy.jpg" alt="Você Acertou!!">
            <div class="col-12 bresult">
                <span class="col-2"></span>
                <button class="col-3" onclick="refazer()"><span class="mt">Refazer</span><br><i class="fas fa-reply"></i></button>
                <span class="col-2"></span>
                <button class="col-3" onclick="redireciona()"><span class="mt">Proximo</span><br><i class="fas fa-rocket"></i></button>
            </div>
        </div>
    </div>
<?php
} else {
    ?>
    <div class="col-12 result">
        <div class="col-12 ">
            <div class="col-12">
                <span class="col-3"></span>
                <h1 class="col-6 center"><i class="far fa-frown"></i> Você Errou!! <i class="far fa-frown"></i></h1>
                <span class="col-3"></span>
                <div class="col-12">
                    <span class="col-3"></span>
                    <h3 class="col-6 center">Não desista você consegue!!</h3>
                </div>
            </div>
            <span class="col-4"></span>
            <img class="col-4 iresult" src="../img/boy-sad.jpg" alt="Você Errou!!">
            <div class="col-12 bresult">
                <span class="col-4"></span>
                <button class="col-4" onclick="refazer()"><span class="mt">Tentar Novamente</span><br><i class="fas fa-reply"></i></button>
            </div>
        </div>
    </div>
<?php
}

?>