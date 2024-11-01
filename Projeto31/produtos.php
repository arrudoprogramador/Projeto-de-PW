<?php include 'php/db.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos | Pegasus</title>
    <link rel="stylesheet" href="css/styleProdutos.css">
</head>
<body>
    <?php
        include_once 'validaNav.php';
    ?>
    <section>
        <h2>Nosso Catálogo</h2>
        <div class="produto-lista">
            <?php
            $sql = "SELECT * FROM produtos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='produto'>";
                    echo "<h3>" . $row['nome'] . "</h3>";
                    echo "<p>Preço: R$ " . $row['preco'] . "</p>";
                    echo "<a href='descricao_produto.php?id=" . $row['id'] . "'>Ver mais</a>";
                    echo "</div>";
                }
            } else {
                echo "Nenhum produto encontrado.";
            }
            ?>
        </div>
    </section>
    <?php
    include_once 'scriptBootstrap.php';
    include_once 'footer.php';
    ?>
</body>
</html>
