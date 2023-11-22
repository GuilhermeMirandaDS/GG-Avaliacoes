<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Resultados</title>
</head>

<body>
  <header>
    <nav>
      <img class="logoicon" src="elementos/logo.webp">
      <h1 class="logo">GG Avaliações</h1>
      <div id="menu-icon">&#9776;</div>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="#title04">Destaques</a></li>
        <li><a href="#title05">Recomendações</a></li>
      </ul>
    </nav>
    <form class="pesquisa" method="post" action="pesquisa-resultado.php">
      <h2>Filtros:</h2>
      <?php
          require("conecta.php");

          $dados_select = mysqli_query($conn, "SELECT ID_CATEGORIA, Categoria FROM categoria");
          echo '<select name="categoria" class="filtro"> <option disabled selected>Categoria</option>';
          while ($dado = mysqli_fetch_array($dados_select)) {

          echo '<option class="option" value='.$dado[0].'>'.$dado[1].'</option>';

          }
          echo '</select>';
      ?>

      <?php
          require("conecta.php");

          $dados_select = mysqli_query($conn, "SELECT Lancamento FROM obras");
          echo '<select name="categoria" class="filtro"><option disabled selected>Ano</option>';
          while ($dado = mysqli_fetch_array($dados_select)) {

          echo '<option class="option" value='.$dado[0].'</option>';

          }
          echo '</select>';
      ?>
      <select name="avaliacao" class="filtro">
        <option disabled selected>Avaliação</option>
        <option class="option">1</option>
        <option class="option">2</option>
        <option class="option">3</option>
        <option class="option">4</option>
        <option class="option">5</option>
      </select>
      <input type="text" name="nome" id="nome-pesquisa" placeholder="Digite o nome">
      <a href="pesquisa-resultado.php"><input type="button" id="pesquisar-btn" value="Pesquisar"></a>
    </form>
  </header>
  <?php
    require("conecta.php");

    $categoria_obra = $_POST['categoria_obra'];
    $ano_obra = $_POST['ano_obra'];
    $avaliacao_obra = $_POST['avaliacao_obra'];
    $nome_obra = $_POST['nome_obra'];

    $dados_select = mysqli_query($conn, "SELECT ID_OBRA, Nome, ID_AVALIACAO, Foto FROM obras WHERE obras.ID_CATEGORIA = '$categoria_obra' or obras.lancamento = '$ano_obra' or avaliacoes.QTD_ESTRELAS = '$avaliacao_obra' or obras.Nome = '$nome_obra' INNER JOIN avaliacoes on avaliacoes.ID_AVALIACAO = obras.ID_AVALIACAO");
    while ($dado = mysqli_fetch_array($dados_select)) {
      echo '<div class="card"><img src="' . $dado[3] . '"><div class="card-title">' . $dado[1] . '</div><a href="attack.html" class="avaliacao">Avaliações ' . $dado[2] . ' ⭐</a></div>';
    }

  ?>
</body>

</html>