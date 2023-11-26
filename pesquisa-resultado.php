<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="new_style.css">
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
            <li><a href="index.php">Home</a></li>
            <li><a href="avaliacoes.php">Avaliações</a></li>
        </ul>
    </nav>
    <form class="pesquisa" method="post" action="pesquisa-resultado.php">

      <?php
          require("conecta.php");

          $dados_select = mysqli_query($conn, "SELECT ID_CATEGORIA, Categoria FROM categoria");
          echo '<select name="categoria_obra" class="filtro"> <option disabled selected>Categoria</option>';
          while ($dado = mysqli_fetch_array($dados_select)) {

          echo '<option name="categoria_obra" class="option" value='.$dado[0].'>'.$dado[1].'</option>';

          }
          echo '</select>';

      ?>

      
      <input type="text" name="nome_obra" id="nome-pesquisa" placeholder="Digite o nome">
      <input type="submit" id="pesquisar-btn" value="Pesquisar">
    </form>
  </header>
  <?php
    require("conecta.php");

    $nome_obra = $_POST['nome_obra'];
    if (empty($nome_obra)) {
      $nome_obra = '';
    }
    $categoria_obra = 0;
    if (empty($_POST['categoria_obra'])) {
      $categoria_obra = 1;
    } else {$categoria_obra = $_POST['categoria_obra'];}

    $dados_select = mysqli_query($conn, "SELECT ID_OBRA, Nome, Foto FROM obras WHERE obras.ID_CATEGORIA LIKE '$categoria_obra' AND obras.nome LIKE '%$nome_obra%'");
    echo '<h1>Resultados:</h1><br>';
    echo '    <div class="arrow-container">
    <i class="fas fa-arrow-left arrow anime-prev-arrow" id="prev-arrow"></i>
    <i class="fas fa-arrow-right arrow anime-next-arrow" id="next-arrow"></i>
    </div>';
    echo '<div class="card-container">';
    while ($dado = mysqli_fetch_array($dados_select)) {
      echo '<div class="card"><img src="' . $dado[2] . '"><div class="card-title">' . $dado[1] . '</div><a href="avaliacoes.php" class="avaliacao">Avaliar</a></div>';
    }

    echo '</div>';
    echo '    <script>
    const cardContainer = document.querySelector(".card-container");
    const prevArrow = document.getElementById("prev-arrow");
    const nextArrow = document.getElementById("next-arrow");

    let scrollPosition = 0;
    const cardWidth = 320;
    const cardsPerPage = 3;

    prevArrow.addEventListener("click", () => {
        scrollPosition -= cardWidth * cardsPerPage;
        if (scrollPosition < 0) {
            scrollPosition = 0;
        }
        cardContainer.scrollTo({
            left: scrollPosition,
            behavior: "smooth"
        });
    });

    nextArrow.addEventListener("click", () => {
        scrollPosition += cardWidth * cardsPerPage;
        const maxScrollPosition = cardWidth * (cardContainer.children.length - cardsPerPage);
        if (scrollPosition > maxScrollPosition) {
            scrollPosition = maxScrollPosition;
        }
        cardContainer.scrollTo({
            left: scrollPosition,
            behavior: "smooth"
        });
    });
</script>';
    /*$ano_obra = $_POST['ano_obra'];
    $avaliacao_obra = $_POST['avaliacao_obra'];
    $nome_obra = $_POST['nome_obra'];*/
  ?>
</body>

</html>