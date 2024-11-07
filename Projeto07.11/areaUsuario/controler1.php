<?php

require_once 'model/User.php';
require_once './../dao/UserDao.php';

$user = new User();

$user->setNome(isset($_POST['nome']) ? $_POST['nome'] : '');
$user->setCpf(isset($_POST['cpf']) ? $_POST['cpf'] : '');
$user->setNasc(isset($_POST['nasc']) ? $_POST['nasc'] : '');
$user->setCelular(isset($_POST['celular']) ? $_POST['celular'] : '');
$user->setEmail(isset($_POST['email']) ? $_POST['email'] : '');
$user->setPassword(isset($_POST['password']) ? $_POST['password'] : '');


try{
    header('location : index.php');

}catch(Exception $e){
    header('location : cadastro.php');

}

?>
