<?php
    class Conexao
    {
        public static function conectar()
        {
        
        $servidor = "localhost";
        $banco = "bd_loja";
        $usuario = "root";
        $senha = "";

        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha); 
                
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $conexao;
        }
    }

?>