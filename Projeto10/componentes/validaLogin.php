<?php
// Inicia a sessão
session_start();
include_once './../dao/conexao.php'; 

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    // Escapar os dados para evitar SQL Injection
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    
    // Query para buscar o usuário pelo email
    $query = "SELECT * FROM tbUsuario WHERE emailUsuario = '$email' LIMIT 1";
    
    // Executar a query
    $resultado = mysqli_query($conexao, $query);
    
    if ($resultado) {
        $usuario = mysqli_fetch_assoc($resultado); // Pega o usuário encontrado
        
        // Verificar se a senha fornecida corresponde ao hash da senha no banco
        if ($usuario && password_verify($senha, $usuario['senhaUsuario'])) {
            // Senha correta, inicia a sessão e redireciona para a página inicial
            $_SESSION['usuario_id'] = $usuario['idUsuario']; // Exemplo de id do usuário, ajuste conforme necessário
            $_SESSION['usuario_email'] = $usuario['loginUsuario'];
            header("Location: ./../index.php"); // Redireciona para a página principal após login
            exit();
        } else {
            // Senha incorreta
            header("Location: ./login.php?login=erro");
            exit();
        }
    } else {
        // Erro na execução da query
        echo "Erro ao consultar o banco de dados: " . mysqli_error($conexao);
    }

    // Fechar a conexão
    mysqli_close($conexao);
} else {
    // Se a requisição não for via POST, redireciona para a página de login
    header("Location: ./login.php");
    exit();
}
?>
