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
    <header>
        <nav>
            <img class="logoicon" src="elementos/logo.webp" alt="logo">
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
            <select class="filtro" name="categoria_obra">
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
            <select class="filtro" name="ano_obra">
                <option disabled selected>Ano</option>
            </select>
            <select class="filtro" name="avaliacao_obra">
                <option disabled selected>Avaliação</option>
                <option class="option">Todas</option>
                <option class="option">1</option>
                <option class="option">2</option>
                <option class="option">3</option>
                <option class="option">4</option>
                <option class="option">5</option>
            </select>
            <input type="text" name="nome_obra" id="nome-pesquisa" placeholder="Digite o nome">
            <a href="pesquisa-resultado.php"><input type="button" id="pesquisar-btn" value="Pesquisar"></a>
        </form>

    </header>
    <div id="mobile-menu">
        <a href="index.html">Página Inicial</a>
        <li><a href="#title04">Destaques</a></li>
        <li><a href="#title05">Recomendações</a></li>
    </div>

    <script>
        const menuIcon = document.getElementById("menu-icon");
        const mobileMenu = document.getElementById("mobile-menu");

        menuIcon.addEventListener("click", () => {
            mobileMenu.classList.toggle("active");
        });
    </script>
    <div class="card-horizontal">
        <div class="card-content">
            <div class="card-title">
                <h1>Avalie agora! Kyoukai No Kanata!</h1>
                <h6 class="data">22/04/2024</h6>
                <p>Kyoukai no Kanata conta a história de um garoto chamado Akihito Kanbara, que na verdade é meio humano e meio “Youmu”, uma criatura que consegue se curar rapidamente de feridas e machucados. Em um novo ano letivo, Akihito conhece Mirai Kuriyama, uma garota que tenta se suicidar pulando do telhado do colégio.</p>
                <a href="kyoukai.html" class="avaliacaokyoukai"> Avalie agora! ( 5⭐)</a>
            </div>
        </div>
        <div class="card-image">
            <img src="elementos/kyoukai.png" alt="kyoukai">
        </div>
    </div>






    <h1 class="title-1 animes-title">Animes</h1>
    <p class="animes-sub">Avalie os animes da atualidade e os clássicos!</p>
    <div class="arrow-container">
        <i class="fas fa-arrow-left arrow anime-prev-arrow" id="prev-arrow"></i>
        <i class="fas fa-arrow-right arrow anime-next-arrow" id="next-arrow"></i>
    </div>
    <div class="card-container" id="card-container-animes">
        <?php
        require("conecta.php");

        $dados_select = mysqli_query($conn, "SELECT ID_OBRA, Nome, ID_AVALIACAO, Foto FROM obras WHERE obras.tipo = 1");
        while ($dado = mysqli_fetch_array($dados_select)) {
            echo '<div class="card"><img src="' . $dado[3] . '"><div class="card-title">' . $dado[1] . '</div><a href="attack.html" class="avaliacao">Avaliações ' . $dado[2] . ' ⭐</a></div>';
        }
        ?>

    </div>

    <h1 class="title-1 series-title">Séries</h1>
    <p class="series-sub">Avalie as séries da atualidade e as clássicas!</p>
    <div class="arrow-container">
        <i class="fas fa-arrow-left arrow series-prev-arrow" id="prev-arrow-series"></i>
        <i class="fas fa-arrow-right arrow series-next-arrow" id="next-arrow-series"></i>
    </div>

    <div class="card-container" id="card-container-series">
        <?php
        require("conecta.php");

        $dados_select = mysqli_query($conn, "SELECT ID_OBRA, Nome, ID_AVALIACAO, Foto FROM obras WHERE obras.tipo = 2");
        while ($dado = mysqli_fetch_array($dados_select)) {
            echo '<div class="card"><img src="' . $dado[3] . '"><div class="card-title">' . $dado[1] . '</div><a href="attack.html" class="avaliacao">Avaliações ' . $dado[2] . ' ⭐</a></div>';
        }
        ?>
    </div>


    <h1 id="title03 " class="title-1 title-populares">Populares</h1>
    <p class="populares-sub">Explore o que está em alta</p>
    <div class="arrow-container">
        <i class="fas fa-arrow-left arrow populares-prev-arrow" id="prev-arrow-populares"></i>
        <i class="fas fa-arrow-right arrow populares-next-arrow" id="next-arrow-populares"></i>
    </div>

    <div class="card-container" id="card-container-populares">

        <?php
        require("conecta.php");

        $dados_select = mysqli_query($conn, "SELECT ID_OBRA, Nome, ID_AVALIACAO, Foto FROM obras");
        while ($dado = mysqli_fetch_array($dados_select)) {
            echo '<div class="card"><img src="' . $dado[3] . '"><div class="card-title">' . $dado[1] . '</div><a href="attack.html" class="avaliacao">Avaliações ' . $dado[2] . ' ⭐</a></div>';
        }
        ?>
    </div>
        <h1 id="title04" class="title-1 title-destaques">Destaques da Semana</h1>
        <p class="sub"></p>
        <div class="arrow-container">
            <i class="fas fa-arrow-left arrow destaques-prev-arrow" id="prev-arrow-destaques"></i>
            <i class="fas fa-arrow-right arrow destaques-next-arrow" id="next-arrow-destaques"></i>
    </div>

    <div class="card-container" id="card-container-destaques">
            <?php
            require("conecta.php");

            $dados_select = mysqli_query($conn, "SELECT ID_OBRA, Nome, ID_AVALIACAO, Foto FROM obras");
            while ($dado = mysqli_fetch_array($dados_select)) {
                echo '<div class="card"><img src="' . $dado[3] . '"><div class="card-title">' . $dado[1] . '</div><a href="attack.html" class="avaliacao">Avaliações ' . $dado[2] . ' ⭐</a></div>';
            }
            ?>
    </div>


        <h1 id="title05 " class="title-1 title-recomendacoes">Recomendações</h1>
        <p class="sub"></p>
        <div class="arrow-container">
            <i class="fas fa-arrow-left arrow recomendacoes-prev-arrow" id="prev-arrow-recomendacoes"></i>
            <i class="fas fa-arrow-right arrow recomendacoes-next-arrow" id="next-arrow-recomendacoes"></i>
        </div>

    <div class="card-container" id="card-container-recomendacoes">
            <?php
            require("conecta.php");

            $dados_select = mysqli_query($conn, "SELECT ID_OBRA, Nome, ID_AVALIACAO, Foto FROM obras");
            while ($dado = mysqli_fetch_array($dados_select)) {
                echo '<div class="card"><img src="' . $dado[3] . '"><div class="card-title">' . $dado[1] . '</div><a href="attack.html" class="avaliacao">Avaliações ' . $dado[2] . ' ⭐</a></div>';
            }
            ?>
    </div>

    <script>
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
    </script>
    <script>
        const cardContainerPopulares = document.getElementById("card-container-populares");
        const prevArrowPopulares = document.getElementById("prev-arrow-populares");
        const nextArrowPopulares = document.getElementById("next-arrow-populares");

        let scrollPositionPopulares = 0;
        const cardWidthPopulares = 320;
        const cardsPerPagePopulares = 3;

        prevArrowPopulares.addEventListener("click", () => {
            scrollPositionPopulares -= cardWidthSeries * cardsPerPageSeries;
            if (scrollPositionPopulares < 0) {
                scrollPositionPopulares = 0;
            }
            cardContainerPopulares.scrollTo({
                left: scrollPositionPopulares,
                behavior: "smooth"
            });
        });

        nextArrowPopulares.addEventListener("click", () => {
            scrollPositionPopulares += cardWidthPopulares * cardsPerPagePopulares;
            const maxScrollPositionPopulares = cardWidthPopulares * (cardContainerPopulares.children.length - cardsPerPagePopulares);
            if (scrollPositionPopulares > maxScrollPositionPopulares) {
                scrollPositionPopulares = maxScrollPositionPopulares;
            }
            cardContainerPopulares.scrollTo({
                left: scrollPositionPopulares,
                behavior: "smooth"
            });
        });
    </script>
    <script>
        const cardContainerSeries = document.getElementById("card-container-series");
        const prevArrowSeries = document.getElementById("prev-arrow-series");
        const nextArrowSeries = document.getElementById("next-arrow-series");

        let scrollPositionSeries = 0;
        const cardWidthSeries = 320;
        const cardsPerPageSeries = 3;

        prevArrowSeries.addEventListener("click", () => {
            scrollPositionSeries -= cardWidthSeries * cardsPerPageSeries;
            if (scrollPositionSeries < 0) {
                scrollPositionSeries = 0;
            }
            cardContainerSeries.scrollTo({
                left: scrollPositionSeries,
                behavior: "smooth"
            });
        });

        nextArrowSeries.addEventListener("click", () => {
            scrollPositionSeries += cardWidthSeries * cardsPerPageSeries;
            const maxScrollPositionSeries = cardWidthSeries * (cardContainerSeries.children.length - cardsPerPageSeries);
            if (scrollPositionSeries > maxScrollPositionSeries) {
                scrollPositionSeries = maxScrollPositionSeries;
            }
            cardContainerSeries.scrollTo({
                left: scrollPositionSeries,
                behavior: "smooth"
            });
        });
    </script>
    <script>
        const cardContainerDestaques = document.getElementById("card-container-destaques");
        const prevArrowDestaques = document.getElementById("prev-arrow-destaques");
        const nextArrowDestaques = document.getElementById("next-arrow-destaques");

        let scrollPositionDestaques = 0;
        const cardWidthDestaques = 320;
        const cardsPerPageDestaques = 3;

        prevArrowDestaques.addEventListener("click", () => {
            scrollPositionDestaques -= cardWidthDestaques * cardsPerPageDestaques;
            if (scrollPositionDestaques < 0) {
                scrollPositionDestaques = 0;
            }
            cardContainerDestaques.scrollTo({
                left: scrollPositionDestaques,
                behavior: "smooth"
            });
        });

        nextArrowDestaques.addEventListener("click", () => {
            scrollPositionDestaques += cardWidthDestaques * cardsPerPageDestaques;
            const maxScrollPositionDestaques = cardWidthDestaques * (cardContainerDestaques.children.length - cardsPerPageDestaques);
            if (scrollPositionDestaques > maxScrollPositionDestaques) {
                scrollPositionDestaques = maxScrollPositionDestaques;
            }
            cardContainerDestaques.scrollTo({
                left: scrollPositionDestaques,
                behavior: "smooth"
            });
        });
    </script>
    <script>
        const cardContainerRecomendacoes = document.getElementById("card-container-recomendacoes");
        const prevArrowRecomendacoes = document.getElementById("prev-arrow-recomendacoes");
        const nextArrowRecomendacoes = document.getElementById("next-arrow-recomendacoes");

        let scrollPositionRecomendacoes = 0;
        const cardWidthRecomendacoes = 320;
        const cardsPerPageRecomendacoes = 3;

        prevArrowRecomendacoes.addEventListener("click", () => {
            scrollPositionRecomendacoes -= cardWidthRecomendacoes * cardsPerPageRecomendacoes;
            if (scrollPositionRecomendacoes < 0) {
                scrollPositionRecomendacoes = 0;
            }
            cardContainerRecomendacoes.scrollTo({
                left: scrollPositionRecomendacoes,
                behavior: "smooth"
            });
        });

        nextArrowRecomendacoes.addEventListener("click", () => {
            scrollPositionRecomendacoes += cardWidthRecomendacoes * cardsPerPageRecomendacoes;
            const maxScrollPositionRecomendacoes = cardWidthRecomendacoes * (cardContainerRecomendacoes.children.length - cardsPerPageRecomendacoes);
            if (scrollPositionRecomendacoes > maxScrollPositionRecomendacoes) {
                scrollPositionRecomendacoes = maxScrollPositionRecomendacoes;
            }
            cardContainerRecomendacoes.scrollTo({
                left: scrollPositionRecomendacoes,
                behavior: "smooth"
            });
        });
    </script> -->


            <script src="./search.js"></script>
            <p id="not-found-message" style="display: none;">Desculpe, infelizmente não encontramos esta obra em nosso site :(</p>
</body>

</html>