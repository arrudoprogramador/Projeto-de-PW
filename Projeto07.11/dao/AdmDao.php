<?php
    require_once 'conexao.php';
    
    class AdmDao{
        public static function insert($adm){
            
            $conexao = Conexao::conectar();// Conectar ao banco de dados
            
            $query = "INSERT INTO tbadm(cpfAdm, rgAdm, nascAdm, )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            $stmt = $conexao->prepare($query);// Preparar a consulta
            
            $stmt->bindValue(1 , $adm->getId());// Executar a consulta
            $stmt->bindValue(2 , $adm->getCpf());
            $stmt->bindValue(3 , $adm->getNome());
            $stmt->bindValue(4 , $adm->getCelular());
            $stmt->bindValue(5 , $adm->getRg());
            $stmt->bindValue(6 , $adm->getNasc());
            $stmt->bindValue(7 , $adm->getCelular());
            $stmt->bindValue(8 , $adm->getEmail());
            $stmt->bindValue(9 , $adm->getPassword());

            $stmt->execute();
            
            return $stmt->fetchAll();//Este método busca todas as linhas resultantes da consulta SQL e as retorna como um array.
        }

        public static function selectAll($adm){

        }

        public static function selectId($adm){

        }

        public static function deleteId($adm){

        }
        public static function update($adm){

        }
    }