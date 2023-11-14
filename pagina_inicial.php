<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>GG Avaliações</title>
</head>

<body>


  <?php
    require("conecta.php");

    $dados_select = mysqli_query($conn, "SELECT id_obra, Nome, ID_AVALAICAO FROM CHAMADOS inner join probs on probs.id_problema = chamados.Problema WHERE RA = '$ra_aluno'");

  ?>
</body>

</html>