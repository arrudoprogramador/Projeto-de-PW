<?php
session_start();
require 'config.php';

$sql = "SELECT * FROM Produto";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Produtos</h1>
    <div class="produtos-container">
        <?php foreach ($produtos as $produto): ?>
            <div class="produto">
                <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
                <h2><?php echo $produto['nome']; ?></h2>
                <p><?php echo $produto['descricao']; ?></p>
                <p>Preço: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                <button class="btn-favorito" onclick="adicionarFavorito(<?php echo $produto['idP']; ?>)">Adicionar aos Favoritos</button>
                <button class="btn-carrinho" onclick="adicionarCarrinho(<?php echo $produto['idP']; ?>)">Adicionar ao Carrinho</button>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        function adicionarFavorito(idP) {
            window.location.href = "adicionar_favorito.php?idP=" + idP;
        }

        function adicionarCarrinho(idP) {
            window.location.href = "adicionar_carrinho.php?idP=" + idP;
        }
    </script>
</body>
</html>