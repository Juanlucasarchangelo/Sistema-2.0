<?php

//password_hash - criptografa
require_once('class.dao.php');
Class Info extends Dao{
    
    private $camp1;
    private $camp2;
    private $camp3;



    public function setCamp1($nome_prod){
        $this->nome_prod = $nome_prod;
    }
    public function getCamp1(){
        return $this->nome_prod;
    }
    public function setCamp2($quantidade){
        $this->camp2 = $quantidade;
    }
    public function getCamp2(){
        return $this->quantidade;
    }
    public function setCamp3($valor_unitario){
        $this->camp3 = $valor_unitario;
    }
    public function getCamp3(){
        return $this->valor_unitario;
    }
}
?>