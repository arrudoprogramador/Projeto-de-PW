<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Pegasus</title>
    <link rel="stylesheet" href="./../css/styleCadastro.css">
    <!-- Incluindo jQuery a partir de um CDN confiável -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src="./js/script.js"></script>
</head>
<body>
    
    <?php 
        include_once './../componentes/cabecalho3.php'; 
    ?>

    <div class="pai">

    <div class="main-login">
        <h1>Faça o seu cadastro</h1>
        <form action="controlerUser.php" method="post" id="cadastroForm">
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
                </div>
            </div>

            <!-- Linha para Data de Nascimento e Telefone -->
            <div class="textfield-row">
                <div class="textfield">
                    <label for="nasc" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="nasc" name="nasc" required>
                    <div id="data-error" style="color: red; display: none;">Este campo é obrigatório.</div>
                </div>
                <div class="textfield">
                    <label for="celular" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite telefone de contato" required>
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
                    <label for="senha_confirm" class="form-label">Repita sua senha</label>
                    <input type="password" class="form-control" id="senha_confirm" name="senha_confirm" placeholder="Digite sua senha novamente" required>
                    <div id="senha-mismatch" style="color: red; display: none;">As senhas não coincidem.</div>
                </div>
            </div>

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
    </div>

    <!-- Incluindo scripts necessários -->
    <?php include_once './../componentes/scriptBootstrap.php'; ?>

    <!-- Scripts adicionais -->
    <script type="text/javascript" src="./../js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="./../js/atualizarFoto.js"></script>
    <script type="text/javascript" src="./../js/validarForm.js"></script>  
    <script type="text/javascript" src="./../js/modal.js"></script>

    <!-- Script de Validação -->
    <script>
        $(document).ready(function() {
            const form = $('#cadastroForm');
            
            form.on('submit', function(event) {
                let valid = true;

                // Limpar todas as mensagens de erro
                $('.error-message').hide();

                // Verificação de todos os campos obrigatórios
                const nome = $('#nome').val().trim();
                const cpf = $('#cpf').val().trim();
                const dataNasc = $('#nasc').val().trim();
                const celular = $('#celular').val().trim();
                const email = $('#email').val().trim();
                const password = $('#password').val();
                const senhaConfirm = $('#senha_confirm').val();

                // Nome
                if (nome === "") {
                    $('#nome-error').show();
                    valid = false;
                } else {
                    $('#nome-error').hide();
                }

                // Data de Nascimento
                if (dataNasc === "") {
                    $('#data-error').show();
                    valid = false;
                } else {
                    $('#data-error').hide();
                }

                // E-mail
                if (email === "") {
                    $('#email-error').show();
                    valid = false;
                } else {
                    $('#email-error').hide();
                }

                // Senha
                if (password === "") {
                    $('#senha-error').show();
                    valid = false;
                } else {
                    $('#senha-error').hide();
                }

                // Confirmação de Senha
                if (password !== senhaConfirm) {
                    $('#senha-mismatch').show();
                    valid = false;
                } else {
                    $('#senha-mismatch').hide();
                }

                if (!valid) {
                    event.preventDefault(); // Impede o envio do formulário se houver erros
                }
            });

            // Máscaras para CPF e Telefone
            $('#cpf').mask('000.000.000-00');
            $('#celular').mask('(00) 00000-0000');

            // Validação em tempo real
            $('#senha_confirm').on('input', function() {
                const senha = $('#password').val();
                const senhaConfirm = $(this).val();
                if (senha !== senhaConfirm) {
                    $('#senha-mismatch').show();
                } else {
                    $('#senha-mismatch').hide();
                }
            });
        });
    </script>
</body>
</html>
