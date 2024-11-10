<?php

require_once '../../model/Adm.php';
require_once './../../dao/AdmDao.php';

$adm = new Adm();

// Verificar se todos os dados obrigatórios foram fornecidos
if (isset($_POST['cpf'], $_POST['nome'], $_POST['rg'], $_POST['nasc'], $_POST['celular'], $_POST['email'], $_POST['password'])) {
    
    $adm->setCpf($_POST['cpf']);
    $adm->setNome($_POST['nome']);
    $adm->setRg($_POST['rg']);
    $adm->setNasc($_POST['nasc']);
    $adm->setCelular($_POST['celular']);
    $adm->setEmail($_POST['email']);
    
    // Criptografar a senha
    $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $adm->setPassword($hashedPassword);

    // Gerar o token para o administrador
    $adm->generateToken();

    try {
        // Inserir o administrador no banco de dados
        AdmDao::insert($adm);
        echo "Administrador inserido com sucesso!";
    } catch (Exception $e) {
        echo "Erro ao inserir administrador: " . $e->getMessage();
        exit;
    }

} else {
    echo "Erro: Dados incompletos fornecidos.";
    exit;
}
?>
