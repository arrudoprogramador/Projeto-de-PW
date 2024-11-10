<?php
    require_once 'conexao.php';
    
    class AdmDao{
        public static function insert($adm) {
            $conexao = Conexao::conectar(); // Conectar ao banco de dados
            
        
            $query = "INSERT INTO tbadmin (cpfAdm, nomeAdm, celularAdm, rgAdm, nascAdm, emailAdm, passwordAdm, imagemAdm, tokenAdm)
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
            $stmt = $conexao->prepare($query); // Preparar a consulta
        
            $stmt->bindValue(1, $adm->getCpf());
            $stmt->bindValue(2, $adm->getNome());
            $stmt->bindValue(3, $adm->getCelular());
            $stmt->bindValue(4, $adm->getRg());
            $stmt->bindValue(5, $adm->getNasc());
            $stmt->bindValue(6, $adm->getEmail());
            $stmt->bindValue(7, $adm->getPassword());
            $stmt->bindValue(8, $adm->getImagem());
            $stmt->bindValue(9, $adm->getToken());
        
            if($stmt->execute()){
                return $stmt->rowCount();
            }else{
                var_dump($stmt->errorInfo());
            }

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