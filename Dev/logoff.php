<?php
    session_start();

    session_destroy();

    //Redireciona para a página inicial
    header('localition: index.php') ;


?>