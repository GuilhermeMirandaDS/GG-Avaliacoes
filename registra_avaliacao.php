<?php
require("conecta.php");

if (isset($_POST['avaliar'])) {
    $obra_id = $_POST['obra_id'];
    $avaliacao = $_POST['desc'];
    $estrela_id = $_POST['estrelar'];

    $sql = "INSERT INTO avaliacoes (ID_OBRA, DESCRICAO, ID_STAR) VALUES ('$obra_id', '$avaliacao', '$estrela_id')";
    $result = mysqli_query($conn, $sql);

    echo '<link rel="stylesheet" type="text/css" href="style_avaliacao.css">';

    echo '<div class="container">';
    if ($result) {
        echo '<div class="message">Avaliação registrada com sucesso!</div>';
    } else {
        echo '<div class="message">Erro ao registrar avaliação: ' . mysqli_error($conn) . '</div>';
    }
    echo '<a href="avaliacoes.php" class="button">Ver outras avaliações</a></br>';
    echo '</br><a href="index.php" class="button">Voltar para a página inicial</a>';
    echo '</div>';
}
?>
