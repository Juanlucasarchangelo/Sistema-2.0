<?php

//password_hash - criptografa
require_once('class.dao.php');
Class User extends Dao{
    
    public function login($user, $senha){

        global $pdo;

        $sql = "SELECT * FROM usuario WHERE email = :user AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("user", $user);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();

        if ($sql->rowCount() > 0) {

            $dado = $sql->fetch();

            $_SESSION["id_user"] = $dado["id_user"];

            return true;

        } else {
           
            return false;

        }
        

    }

    private $nome;
    private $email;
    private $senha;


    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function getSenha(){
        return $this->senha;
    }
}
?>