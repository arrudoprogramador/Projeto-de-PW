<?php

require_once '../../model/Adm.php';

$adm = new Adm();

$adm -> setId($_POST['id']);
$adm -> setCpf($_POST['cpf']);
$adm -> setRg($_POST['rg']);
$adm -> setNasc($_POST['nasc']);
$adm -> setCelular($_POST['celular']);
$adm -> setNome($_POST['nome']);
$adm -> setEmail($_POST['email']);
$adm -> setPassword($_POST['password']);


echo "<pre>";
print_r ($adm);
echo "</pre>";



?>