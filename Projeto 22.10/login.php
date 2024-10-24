<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Pegassus</title>
    <link rel="stylesheet" href="css/styleLogin.css">
</head>
<body class="body">
    <?php
    include_once 'validaNav.php';
    ?>
    <!-- Login -->
    <div class="main-login">
        <!-- Área da direita com formulário (col-md-6) -->
        <div class="col-md-6 right-login bg-white d-flex flex-column justify-content-center p-4">
            <img src="img/pegassus.png" alt="Logo Pegassus">
        </div>
        
        <!-- Área da direita com formulário -->
        <div class="right-login">
            <h1>Já é cliente Pegassus?<br>Faça login agora mesmo</h1>
            <form action="validaLogin.php" method="post">
                <div class="textfield">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="textfield">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="senha" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="btn-login">Entrar</button>

                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" id="manter-logado">
                    <label class="form-check-label" for="manter-logado">
                        Manter logado?
                    </label>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Incluindo script do Bootstrap -->
    <?php include_once 'scriptBootstrap.php'; ?>
    
</body>
</html>
