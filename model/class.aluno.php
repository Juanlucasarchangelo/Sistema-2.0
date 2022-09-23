<?php

//password_hash - criptografa
require_once('class.dao.php');
Class User extends Dao{
    
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