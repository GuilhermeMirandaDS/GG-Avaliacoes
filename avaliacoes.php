<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="avaliations_pg.css">
    <title>Avaliações</title>
</head>
<body>
    <a href="index.php" class="voltar"><input type="button" value="Voltar"></a>
    <h1 class="titulo">Confira as avaliações dos usuários!</h1>
<?php
        require("conecta.php");

        $dados_select = mysqli_query($conn, "SELECT DESCRICAO, obras.Nome, obras.Foto, estrelas.avaliacao FROM avaliacoes INNER JOIN obras ON obras.ID_OBRA = avaliacoes.ID_OBRA INNER JOIN estrelas ON estrelas.ID_STAR = avaliacoes.ID_STAR");
        while ($dado = mysqli_fetch_array($dados_select)) {
            if ($dado['avaliacao'] == 'Muito Ruim'){
                echo '<div class="card"><div class="card-title">' . $dado['Nome'] . ' <img src="' . $dado['Foto'] . '"> <p class="coment">Comentário do usuário: </p><p> " ' . $dado['DESCRICAO'] . ' " </p> <p class="mtruim">Classificação: ' . $dado['avaliacao'] . '</p>  <p>⭐</p> </div></a></div>';
            }
            if ($dado['avaliacao'] == 'Ruim'){
                echo '<div class="card"><div class="card-title">' . $dado['Nome'] . ' <img src="' . $dado['Foto'] . '"> <p class="coment">Comentário do usuário: </p><p> " ' . $dado['DESCRICAO'] . ' " <p class="ruim">Classificação: ' . $dado['avaliacao'] . '</p>  <p>⭐⭐</p> </div></a></div>';
            }
            if ($dado['avaliacao'] == 'Ok'){
                echo '<div class="card"><div class="card-title">' . $dado['Nome'] . ' <img src="' . $dado['Foto'] . '"> <p class="coment">Comentário do usuário: </p><p> " ' . $dado['DESCRICAO'] . ' " <p class="ok">Classificação: ' . $dado['avaliacao'] . '</p> <p>⭐⭐⭐</p> </div></a></div>';
            }
            if ($dado['avaliacao'] == 'Bom'){
                echo '<div class="card"><div class="card-title">' . $dado['Nome'] . ' <img src="' . $dado['Foto'] . '"> <p class="coment">Comentário do usuário: </p><p> " ' . $dado['DESCRICAO'] . ' " <p class="bom">Classificação: ' . $dado['avaliacao'] . '</p>  <p>⭐⭐⭐⭐</p> </div></a></div>';
            }
            if ($dado['avaliacao'] == 'Muito Bom'){
                echo '<div class="card"><div class="card-title">' . $dado['Nome'] . ' <img src="' . $dado['Foto'] . '"> <p class="coment">Comentário do usuário: </p><p> " ' . $dado['DESCRICAO'] . ' " <p class="mtbom">Classificação: ' . $dado['avaliacao'] . '</p>  <p>⭐⭐⭐⭐⭐</p> </div></a></div>';
            }
        }
        
        ?>
</body>
</html>