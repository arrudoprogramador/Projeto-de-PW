<?php

require_once './../model/User1.php';
require_once './../dao/UserDao.php';

$user = new User();

if(isset($_POST['nome'], $_POST['cpf'], $_POST['nasc'], $_POST['celular'], $_POST['email'], $_POST['password'])){

    $user->setNome($_POST['nome']);
    $user->setCpf($_POST['cpf']);
    $user->setNasc($_POST['nasc']);
    $user->setCelular($_POST['celular']);
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);

    // Criptografar a senha
    $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user->setPassword($hashedPassword);

    try {
        // Instância do DAO (se insert não for estático)
        $userDao = new UserDao();
        $userDao->insert($user);
        header('location: ./../index.php');
        exit;
    } catch (Exception $e) {
        echo "Erro ao inserir usuário: " . $e->getMessage();
        exit;
    }
} else {
    echo "Erro: Dados incompletos fornecidos.";
    exit;
}

?>
