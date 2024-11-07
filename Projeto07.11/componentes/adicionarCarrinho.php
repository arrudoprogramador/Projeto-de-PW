<?php
session_start();
require 'config.php';

$idUsuario = $_SESSION['id_usuario'];
$idProduto = $_GET['idP'];

// Verifica se o produto já está no carrinho
$sql = "SELECT * FROM Carrinho WHERE idU = :idUsuario AND idP = :idProduto";
$stmt = $pdo->prepare($sql);
$stmt->execute(['idUsuario' => $idUsuario, 'idProduto' => $idProduto]);

if ($stmt->rowCount() > 0) {
    // Se já estiver no carrinho, incrementa a quantidade
    $sql = "UPDATE Carrinho SET quantidade = quantidade + 1 WHERE idU = :idUsuario AND idP = :idProduto";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['idUsuario' => $idUsuario, 'idProduto' => $idProduto]);
} else {
    // Se não estiver, adiciona ao carrinho
    $sql = "INSERT INTO Carrinho (idU, idP, quantidade) VALUES (:idUsuario, :idProduto, 1)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['idUsuario' => $idUsuario, 'idProduto' => $idProduto]);
}

header("Location: produtos.php");
exit;
?>
