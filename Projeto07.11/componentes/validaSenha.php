<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Verifica se as senhas são iguais
        if ($password !== $confirm_password) {
            echo "<p style='color: red;'>As senhas não coincidem. Tente novamente.</p>";
        } else {
            // Continuar com o cadastro (exemplo de exibição de confirmação)
            echo "<p style='color: green;'>Cadastro realizado com sucesso!</p>";
            // Aqui você pode adicionar o código para salvar os dados no banco de dados
        }
    }
    ?>