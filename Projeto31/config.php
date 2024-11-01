<?php
$hostname = "localhost";
$username = "root"; 
$password = ""; 
$database = "bd_loja";

// Conectando ao banco de dados
$conexao = new mysqli($hostname, $username, $password, $database);

// Verificando a conexão
if ($conexao->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conexao->connect_error);
}
?>
