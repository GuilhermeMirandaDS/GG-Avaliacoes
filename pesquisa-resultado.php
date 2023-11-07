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
      <img class="logoicon" src="/elementos/logo.webp">
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
      <select name="categoria" class="filtro">
        <option disabled selected>Categoria</option>
        <option class="option">Todas</option>
        <option class="option">Ação</option>
        <option class="option">Aventura</option>
        <option class="option">Comédia</option>
        <option class="option">Drama</option>
        <option class="option">Romance</option>
        <option class="option">Fantasia</option>
        <option class="option">Suspense</option>
        <option class="option">Terror</option>
      </select>
      <select name="ano" class="filtro">
        <option disabled selected>Ano</option>
      </select>
      <select name="avaliacao" class="filtro">
        <option disabled selected>Avaliação</option>
        <option class="option">Todas</option>
        <option class="option">1</option>
        <option class="option">2</option>
        <option class="option">3</option>
        <option class="option">4</option>
        <option class="option">5</option>
      </select>
      <input type="text" name="nome" id="nome-pesquisa" placeholder="Digite o nome">
      <a href="pesquisa-resultado.php"><input type="button" id="pesquisar-btn" value="Pesquisar"></a>
    </form>
  <?php
  require("conecta.php");

  $nome = $_POST['nome'];
  $categoria = $_POST['categoria'];
  $ano = $_POST['ano'];
  $avaliacao = $_POST['avaliacao'];

  $sql = "SELECT * FROM obras WHERE 1=1";

  if (!empty($nome)) {
    $sql .= " AND Nome LIKE '%$nome%'";
  }

  if (!empty($categoria)) {
    $sql .= " AND ID_CATEGORIA = '$categoria'";
  }

  if (!empty($ano)) {
    $sql .= " AND Lancamento = '$ano'";
  }

  if (!empty($avaliacao) && $avaliacao !== 'Todas') {
    $sql .= " AND ID_AVALIACAO = '$avaliacao'";
  }

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<h2>Resultados da Pesquisa:</h2>";
    while ($row = $result->fetch_assoc()) {
      echo "Nome: " . $row["Nome"] . "<br>";
      echo "Categoria: " . $row["ID_CATEGORIA"] . "<br>";
      echo "Ano: " . $row["Lancamento"] . "<br>";
      echo "Avaliação: " . $row["ID_AVALIACAO"] . "<br>";
    }
  } else {
    echo "Nenhum resultado encontrado.";
  }

  $conn->close();
?>
</body>

</html>