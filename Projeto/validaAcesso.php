<?php
    session_start();

    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'NÃO'){

        header('location: index.php?login=erro2');

    }
?>
