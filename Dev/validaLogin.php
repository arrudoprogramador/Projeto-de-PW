<?php
    session_start();

    $usuario_app = array(
       array('id' => 1, 'email' => 'arruda@etec.com', 'senha' => '1234') 
    );

    $usuario_autenticado = false;

    foreach($usuario_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        $_SESSION['autenticado'] == "SIM";

        //echo "Usuário Autenticado";
        header("Location: home.php");
    }else{
            $_SESSION ['autenticado']="NÂO";

        //echo "Erro na autenticação do usuário.";
        header("Location: index.php?login=erro");
    }


?>