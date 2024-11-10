<?php
    require_once 'conexao.php';

    class UserDao{
        public static function insert($user){
            $conexao = Conexao::conectar();

            $query = "INSERT INTO tbusuario(nomeUsuario, cpfUsuario,nascUsuario,celularUsuario,	emailUsuario,passwordUsuario)
                VALUES (?, ?, ?, ?, ?, ?)";

            ;

            $stmt = $conexao -> prepare($query);

            $stmt->bindValue(1, $user->getNome());
            $stmt->bindValue(2, $user->getCpf());
            $stmt->bindValue(3, $user->getNasc());
            $stmt->bindValue(4, $user->getCelular());
            $stmt->bindValue(5, $user->getEmail());
            $stmt->bindValue(6, $user->getPassword());

            if($stmt->execute()){
                return $stmt->rowCount();
            }else{
                var_dump($stmt->errorInfo());
            }
        }
        public static function selectAll($user){

        }

        public static function selectId($user){

        }

        public static function deleteId($user){

        }
        public static function update($user){

        }
    }







?>