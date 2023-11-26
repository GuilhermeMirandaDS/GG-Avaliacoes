<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_avac.css">
    <title>Avaliação da Obra</title>
</head>
<body>
    <a href="index.php" class="voltar"><input type="button" value="Voltar"></a>

    <?php
        require("conecta.php");

        if (isset($_GET['id'])) {
            $obra_id = $_GET['id'];

            $query = "SELECT ID_OBRA, Nome, Foto FROM obras WHERE ID_OBRA = $obra_id";
            $result = mysqli_query($conn, $query);

            if ($result && $dado = mysqli_fetch_array($result)) {
                echo '<div class="card">';
                echo '<h1 class="obra-titulo">' . $dado['Nome'] . '</h1>';
                echo '<img class="obra-imagem" src="' . $dado['Foto'] . '">';
                echo '</div>';
            } else {
                echo 'Obra não encontrada.';
            }
        } else {
            echo 'ID da obra não fornecido.';
        }
    ?>

    <form class="avaliacao-form" method="POST" action="registra_avaliacao.php?id=<?php echo $obra_id; ?>">
        <input type="hidden" name="obra_id" value="<?php echo $obra_id; ?>">
        <table>
            <?php
                require("conecta.php");

                $dados_select = mysqli_query($conn, "SELECT id_star, avaliacao FROM estrelas");

                echo "<tr><td>Avaliação: <select name='estrelar'>";
                while($dado = mysqli_fetch_array($dados_select)) {
                    echo '<option value='.$dado[0].'>'.$dado[1].'</option>';
                }
                echo "</select></td></tr>";
            ?>

            <tr>
                <td class="avac">Digite sua avaliação: <textarea class="avaliacao-textarea" name="desc"></textarea></td>
            </tr>

            <tr>
                <td><input type="submit" value="Avaliar" name='avaliar'></td>
            </tr>
        </table>
    </form>
</body>
</html>
