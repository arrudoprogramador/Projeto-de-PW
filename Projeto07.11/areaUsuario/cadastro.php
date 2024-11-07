<?php
session_start();

    // Verificação se o email já existe
    $checkEmail = "SELECT * FROM tbUsuario WHERE loginUsuario = '$email'";
    $result = mysqli_query($conexao, $checkEmail);
    
    if (mysqli_num_rows($result) > 0) {
        echo "Erro: E-mail já cadastrado.";
        exit();
    }

    $query = "INSERT INTO tbUsuario (loginUsuario, senhaUsuario, nomeUsuario, cpfUsuario, dataNascUsuario, telUsuario) 
              VALUES ('$email', '$senhaHash', '$nome', '$cpf', '$data_nascimento', '$telefone')";

    $autenticado = mysqli_query($conexao, $query);

    if ($autenticado) {
        header('location: index.php');
        exit();
    } else {
        echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Pegasus</title>
    <link rel="stylesheet" href="./../css/styleCadastro.css">
    <script defer src="./js/script.js"></script>
</head>
<body>
    
<?php 
    include_once './../componentes/cabecalho3.php'; 
?>

<div class="main-login">
    <h1>Faça o seu cadastro</h1>
    <form action="controler1.php" method="post" id="cadastroForm">
        <!-- Linha para Nome e CPF -->
        <div class="textfield-row">
            <div class="textfield">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                <div id="nome-error" style="color: red; display: none;">Este campo é obrigatório.</div>
            </div>
            <div class="textfield">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
                <div id="cpf-error" style="color: red; display: none;">Deve conter 11 dígitos numéricos.</div>
            </div>
        </div>

        <!-- Linha para Data de Nascimento e Telefone -->
        <div class="textfield-row">
            <div class="textfield">
                <label for="data-nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="nasc" name="nasc" required>
                <div id="data-error" style="color: red; display: none;">Este campo é obrigatório.</div>
            </div>
            <div class="textfield">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite telefone de contato" required>
                <div id="tel-error" style="color: red; display: none;">Necessário 11 números (com DDD).</div>
            </div>
        </div>

        <!-- Campo para E-mail -->
        <div class="textfield">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
            <div id="email-error" style="color: red; display: none;">Este campo é obrigatório.</div>
        </div>

        <!-- Linha para Senha e Confirmação de Senha -->
        <div class="textfield-row">
            <div class="textfield">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
                <div id="senha-error" style="color: red; display: none;">Este campo é obrigatório.</div>
            </div>
            <div class="textfield">
                <label for="password-confirm" class="form-label">Repita sua senha</label>
                <input type="password" class="form-control" id="senha_confirm" name="senha_confirm" placeholder="Digite sua senha novamente" required>
                <div id="senha-mismatch" style="color: red; display: none;">As senhas não coincidem.</div>
            </div>
        </div>

        <script>
            const form = document.getElementById('cadastroForm');
            
            form.addEventListener('submit', function(event) {
                let valid = true;

                // Verificação de todos os campos obrigatórios
                const nome = document.getElementById('nome');
                const cpf = document.getElementById('cpf');
                const dataNasc = document.getElementById('data_nasc');
                const tel = document.getElementById('tel');
                const email = document.getElementById('email');
                const password = document.getElementById('password');
                const senhaConfirm = document.getElementById('senha_confirm');

                // Exibir erro se o campo estiver vazio
                if (!nome.value) {
                    document.getElementById('nome-error').style.display = 'block';
                    valid = false;
                } else {
                    document.getElementById('nome-error').style.display = 'none';
                }

                if (!cpf.value) {
                    document.getElementById('cpf-error').style.display = 'block';
                    valid = false;
                } else {
                    document.getElementById('cpf-error').style.display = 'none';
                }

                if (!dataNasc.value) {
                    document.getElementById('data-error').style.display = 'block';
                    valid = false;
                } else {
                    document.getElementById('data-error').style.display = 'none';
                }

                if (!tel.value) {
                    document.getElementById('tel-error').style.display = 'block';
                    valid = false;
                } else {
                    document.getElementById('tel-error').style.display = 'none';
                }

                if (!email.value) {
                    document.getElementById('email-error').style.display = 'block';
                    valid = false;
                } else {
                    document.getElementById('email-error').style.display = 'none';
                }

                if (!password.value) {
                    document.getElementById('senha-error').style.display = 'block';
                    valid = false;
                } else {
                    document.getElementById('senha-error').style.display = 'none';
                }

                if (password.value !== senhaConfirm.value) {
                    document.getElementById('senha-mismatch').style.display = 'block';
                    valid = false;
                } else {
                    document.getElementById('senha-mismatch').style.display = 'none';
                }

                if (!valid) {
                    event.preventDefault(); // Impede o envio do formulário se houver erros
                }
            });

            // Scripts de validação individuais para CPF e Telefone
            document.getElementById('cpf').addEventListener('input', function() {
                const cpfInput = this.value;
                const cpfError = document.getElementById('cpf-error');
                const cpfRegex = /^\d{11}$/;

                if (!cpfRegex.test(cpfInput)) {
                    cpfError.style.display = 'block';
                } else {
                    cpfError.style.display = 'none';
                }
            });

            document.getElementById('tel').addEventListener('input', function() {
                const telInput = this.value;
                const telError = document.getElementById('tel-error');
                const formattedTel = telInput.replace(/\D/g, '');

                if (formattedTel.length != 11) {
                    telError.style.display = 'block';
                } else {
                    telError.style.display = 'none';
                }
            });

            document.getElementById('senha_confirm').addEventListener('input', function() {
                const senha = document.getElementById('password').value;
                const senhaConfirm = this.value;
                const mensagemErro = document.getElementById('senha-mismatch');

                if (senha !== senhaConfirm) {
                    mensagemErro.style.display = 'block';
                } else {
                    mensagemErro.style.display = 'none';
                }
            });
        </script>

        <!-- Botão de Cadastro -->
        <button type="submit" class="btn-login">Cadastrar</button>

        <div class="form-check d-flex align-items-center justify-content-between mt-3">
            <div>
                <input class="form-check-input" type="checkbox" id="manter-logado">
                <label class="form-check-label" for="manter-logado">
                    Manter logado?
                </label>
            </div>
            <div>
                <span>Já tem uma conta?</span>
                <a href="login.php" class="text-primaryi">Faça login</a>
            </div>
        </div>
    </form>
    </div>

    <!-- Incluindo script do Bootstrap -->
    <?php include_once './../componentes/scriptBootstrap.php'; ?>
       <!-- Para usar Mascara  -->

    <script type="text/javascript" src="./../../js/atualizarFoto.js"></script>
    <script type="text/javascript" src="./../../js/validarForm.js"></script>  
    <script type="text/javascript" src="./../../js/modal.js"></script>
</body>

</html>