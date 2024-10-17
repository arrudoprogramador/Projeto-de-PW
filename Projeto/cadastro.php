<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça login na Pegassus</title>
    <link rel="stylesheet" href="css/styleCadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <style>
body {
    background: linear-gradient(135deg, #1d2b64, #04c925);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    margin: 0;
    padding-top: 70px;
    font-family: 'Poppins', sans-serif;
}

.container {
    background-color: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    width: 100%;
}

.left-login {
    background: url('img/pegassus.png') no-repeat center center; 
    background-size: contain; 
    width: 50%; 
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align:center;
}

h1 {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
    font-size: 24px;
}

.textfield {
    margin-bottom: 20px;
}

.textfield label {
    font-size: 14px;
    color: #555;
    margin-bottom: 5px;
    display: block;
}

.textfield input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    transition: border-color 0.3s ease;
}

.textfield input:focus {
    border-color: #007bff;
    outline: none;
}

.btn-login {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-login:hover {
    background-color: #0056b3;
}

.form-check {
    display: flex;
    align-items: center;
    margin-top: 20px;
}

.form-check-label {
    margin-left: 10px;
    font-size: 14px;
    color: #555;
}
    </style>
<?php
    include_once 'validaNav.php';
    ?>

    <div class="container d-flex align-items-center justify-content-center">
        <!-- Dividindo a tela em duas colunas -->
        <div class="row w-100">
            <!-- Área da esquerda (col-md-6) -->
            <div class="col-md-6 left-login d-flex flex-column justify-content-center align-items-center bg-light p-4">
                <img src="img/Pegassus.png" alt="Imagem ilustrativa" class="img-fluid mt-4">
            </div>

            <!-- Área da direita com formulário (col-md-6) -->
            <div class="col-md-6 right-login bg-white d-flex flex-column justify-content-center p-4">
            <h1>Ainda não é cliente?<br>Faça seu cadastro agora mesmo</h1>
                <form action="validaLogin.php" method="post">
                    <div class="row">
                        <!-- Nome e CPF em colunas -->
                        <div class="col-md-6 textfield">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome"
                                placeholder="Digite seu nome completo" required>
                        </div>
                        <div class="col-md-6 textfield">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF">
                        </div>
                    </div>

                    <!-- Data de Nascimento e Telefone em colunas -->
                    <div class="row">
                        <div class="col-md-6 textfield">
                            <label for="data-nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data-nascimento" name="data_nascimento" required>
                        </div>
                        <div class="col-md-6 textfield">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone"
                                placeholder="Digite telefone de contato" required>
                        </div>
                    </div>

                    <!-- E-mail -->
                    <div class="textfield">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Digite seu e-mail" required>
                    </div>

                    <!-- Senha e Confirmar Senha em colunas -->
                    <div class="row">
                        <div class="col-md-6 textfield">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" name="senha"
                                placeholder="Digite sua senha" required>
                        </div>
                        <div class="col-md-6 textfield">
                            <label for="password-confirm" class="form-label">Repita sua senha</label>
                            <input type="password" class="form-control" id="password-confirm" name="senha_confirm"
                                placeholder="Digite sua senha novamente" required>
                        </div>
                    </div>

                    <!-- Botão de Enviar -->
                    <button type="submit" class="btn-login btn btn-primary mt-3">Cadastrar</button>

                    <!-- Manter Logado -->
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="radio" id="manter-logado">
                        <label class="form-check-label" for="manter-logado">Manter logado?</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
