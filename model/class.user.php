<?php

class Usuario {

    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $celular;
    private $dataNasc;
    private $cpf;
    private $foto;

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getemail(){
        return $this->email;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setDataNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }
    public function getDataNasc(){
        return $this->dataNasc;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function setFoto($foto){
        $this->foto = $foto;
    }
    public function getFoto(){
        return $this->foto;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getTelefone(){
        return $this->telefone;
    }
}

?>