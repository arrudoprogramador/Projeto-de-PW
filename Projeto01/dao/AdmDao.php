<?php
    require_once 'conexao.php';
    
    class AdmDao{
        public static function modelo(){
            // Conectar ao banco de dados
            $conexao = Conexao::conectar();
            // Definir uma consulta SQL (exemplo: selecionar todos os filmes)
            $query ="SELECT * FROM tbadm";
            // Preparar a consulta
            $stmt = $conexao->prepare($query);
            // Executar a consulta
            $stmt->execute();
            //Este método busca todas as linhas resultantes da consulta SQL e as retorna como um array.
            return $stmt->fetchAll();
        }

    }