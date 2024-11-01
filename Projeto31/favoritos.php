<?php
session_start();
require 'config.php';

$idUsuario = $_SESSION['id_usuario'];
$idProduto = $_GET['idP'];

// Verifica se o produto já está nos favoritos
$sql = "SELECT * FROM Favorito WHERE idU = :idUsuario AND idP = :idProduto";
$stmt = $pdo->prepare($sql);
$stmt->execute(['idUsuario' => $idUsuario, 'idProduto' => $idProduto]);

if ($stmt->rowCount() == 0) {
    // Se não estiver, adiciona aos favoritos
    $sql = "INSERT INTO Favorito (idU, idP) VALUES (:idUsuario, :idProduto)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['idUsuario' => $idUsuario, 'idProduto' => $idProduto]);
}

header("Location: produtos.php");
exit;
?>
