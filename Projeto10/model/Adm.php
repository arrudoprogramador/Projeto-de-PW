<?php
    class Adm {
      public $id, $cpf, $nome, $rg, $nasc, $celular, $email, $password, $imagem, $token;
  
      public function getId() {
          return $this->id;
      }
      public function setId($id) {
          $this->id = $id;
      }
  
      public function getCpf() {
          return $this->cpf;
      }
      public function setCpf($cpf) {
          $this->cpf = $cpf;
      }
  
      public function getNome() {
          return $this->nome;
      }
      public function setNome($nome) {
          $this->nome = $nome;
      }
  
      public function getRg() {
          return $this->rg;
      }
      public function setRg($rg) {
          $this->rg = $rg;
      }
  
      public function getNasc() {
          return $this->nasc;
      }
      public function setNasc($nasc) {
          $this->nasc = $nasc;
      }
  
      public function getCelular() {
          return $this->celular;
      }
      public function setCelular($celular) {
          $this->celular = $celular;
      }
  
      public function getEmail() {
          return $this->email;
      }
      public function setEmail($email) {
          $this->email = $email;
      }
  
      public function getPassword() {
          return $this->password;
      }
      public function setPassword($password) {
          $this->password = $password;
      }
  
      public function getImagem() {
          return $this->imagem;
      }
      public function setImagem($imagem) {
          $this->imagem = $imagem;
      }
  
      public function getToken() {
          return $this->token;
      }
      public function setToken($token) {
          $this->token = $token;
      }
  
      public function generateToken() {
          $this->token = bin2hex(random_bytes(16)); // Armazena o token automaticamente
      }
  
      public function salvarImagem($novo_nome) {
          if (!empty($_FILES['foto']['size'])) { // Verificação se o arquivo foi enviado
              if (empty($novo_nome)) { // Criação de um novo nome único, se necessário
                  $novo_nome = md5(time()) . ".jpg";
              }
              
              $diretorio = "../../img/adm/";
              $nomeCompleto = $diretorio . $novo_nome;
  
              if (move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto)) {
                  return $novo_nome; // Retorna o nome do arquivo salvo com sucesso
              } else {
                  echo "Erro ao fazer upload da imagem."; // Mensagem de erro caso o upload falhe
                  return false;
              }
          } else {
              return $novo_nome;
          }
      }


    }
?>