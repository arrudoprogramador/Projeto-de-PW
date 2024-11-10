<?php
session_start();
require 'config.php';

// Verifica se a sessão de autenticação existe
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'NÃO') {
    header('Location: login.php?login=erro'); // Redireciona para a página de login
    exit();
}

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    // Consulta no banco de dados para verificar as credenciais
    $query = "SELECT * FROM tbUsuario WHERE loginUsuario = '$email' AND senhaUsuario = '$senha'";
    $resultado = mysqli_query($conexao, $query);

    // Verifica se o usuário foi encontrado
    if (mysqli_num_rows($resultado) > 0) {
        $_SESSION['autenticado'] = 'SIM'; // Define a sessão de autenticado
        $_SESSION['email'] = $email; 

        header('Location: index.php');
        exit();
    } else {
        // Caso as credenciais sejam inválidas
        header('Location: login.php?login=erro');
        exit();
    }
} else {
    // Redireciona caso não tenha enviado as informações
    header('Location: login.php?login=erro');
    exit();
}
?>
