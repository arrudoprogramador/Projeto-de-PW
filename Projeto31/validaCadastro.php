<?php
session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'NÃO') {
    header('Location: cadastro.php?cadastro=erro');
    exit;
} else {
    header('location: index.php');
}
?>
