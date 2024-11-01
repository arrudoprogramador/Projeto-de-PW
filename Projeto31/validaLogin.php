<?php

if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'NÃO'){
        header('Location: login.php?login=erro');
        exit;
    }else{
        header('location: index.php');
    }

?>