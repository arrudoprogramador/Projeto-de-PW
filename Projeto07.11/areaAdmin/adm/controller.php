<?php

require_once '../../model/Adm.php';
require_once './../dao/admDao.php';

$adm = new Adm();

$adm->setId($_POST['id']) ;
$adm->setCpf($_POST['cpf']) ;
$adm->setNome($_POST['nome']) ;
$adm->setCpf($_POST['cpf']) ;
$adm->setNasc($_POST['nasc']) ;
$adm->setCelular($_POST['celular']);
$adm->setEmail($_POST['email']); 
$adm->setPassword($_POST['password']) ;

try{
    header('location : index.php');

}catch(Exception $e){
    header('location : register.php');

}


?>
