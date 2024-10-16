<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça login na Pegasus</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body class="body">
    <!--Navbar-->
    <?php
        include_once 'validaNav.php';
    ?>
    <!--Fim da Navbar-->

     <!--Login-->
     <div class="main-login">
        <!-- Área da esquerda com imagem-->
        <div class="left-login">
          
        </div>
        <!-- Área da direita com formulário -->
        <div class="right-login">
        <h1>Bem-vindo! Já é cliente?<br>Faça login agora mesmo</h1>
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
            </form>
        </div>
    </div>
    <!--Fim do login-->

    <footer>
        &copy; 2024 Os mlk de DS
    </footer>

    <?php
    include_once 'scriptBootstrap.php';

    ?>
    </body>
</html>
