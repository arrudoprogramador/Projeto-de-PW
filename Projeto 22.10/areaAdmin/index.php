<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador - Pegassus</title>
    <link rel="stylesheet" href="css/styleLogin.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            margin: 0;
        }
        .login-container {
            background-color: white; 
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); 
            padding: 2rem;
            width: 90%; 
            max-width: 400px;
        }
        .btn-primary {
            background-color: #007bff; 
            border: none; 
        }
        .btn-primary:hover {
            background-color: #0056b3; 
        }
        .logo {
            max-width: 100px; 
            margin-bottom: 20px; 
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2 class="text-center">Faça Login</h2>
        <form action="validaLogin.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="senha" placeholder="Digite sua senha" required>
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    <input type="checkbox" id="manter-logado" class="form-check-input">
                    <label for="manter-logado" class="form-check-label">Manter logado</label>
                </div>
                <a href="#" class="text-decoration-none">Esqueceu a senha?</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-3">Entrar</button>
        </form>
        <div class="mt-3 text-center">
            <span>Ainda não tem uma conta?</span>
            <a href="cadastroAdmin.php" class="text-primary">Cadastre-se</a>
        </div>
    </div>

    <?php
    include_once 'scriptBootstrap.php';
    ?>
</body>

</html>
