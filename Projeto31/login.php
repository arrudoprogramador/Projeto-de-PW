<?php
session_start();
require 'config.php';

if(!isset($_POST['email']) && isset($_POST['senha'])){

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $autenticado = mysqli_query($conexao, "INSERT INTO tbUsuario (loginUsuario, senhaUsuario) VALUES ('$email', '$senha')");

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Pegassus</title>
    <link rel="stylesheet" href="css/styleLogin.css"> 
</head>
<body class="body">

<?php include_once 'validaNav.php'; ?>

<!-- Login -->
<div class="main-login">
    <!-- Área da esquerda com imagem -->
    <div class="left-login">
        <img src="img/Slogan1.png" alt="Logo Pegassus">
    </div>
    
    <!-- Área da direita com formulário -->
    <div class="right-login">
        <h1>Já possui uma conta?<br> Faça login agora mesmo</h1>
        <form action="validaLogin.php" method="post">
            <div class="textfield">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
            </div>
            <div class="textfield">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn-login">Entrar</button>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" id="manter-logado">
                <label class="form-check-label" for="manter-logado">
                    Manter logado?
                </label>
                <div class="mt-3 text-center">
                    <span>Ainda não tem uma conta?</span>
                    <a href="cadastro.php" class="text-primaryi">Cadastre-se</a>
                </div>
            </div>
            
            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro'): ?>
                <p style="color: red; text-align: center;">Faça login para começar!</p>
            <?php endif; ?>
        </form>
    </div>
</div>

<!-- Incluindo script do Bootstrap -->
<?php include_once 'scriptBootstrap.php'; ?>

</body>
</html>
