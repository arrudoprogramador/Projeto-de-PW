<?php
session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'NÃO') {
    require_once 'cabecalho1.php';
} else {
    require_once 'cabecalho2.php';
}

?>
