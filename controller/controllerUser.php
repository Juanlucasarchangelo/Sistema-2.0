<?php
require_once('../model/class.user.php');
Class ControllerUser{
    private $obj;
    function __construct(){
        $this->obj = new User();
        $this->obj->conexao();
    }
    
    public function getTodosFunc(){
        $this->obj->conexao();
        $this->obj->getUser();
    }

    public function setUser($nome,$email,$senha){
        $this->obj->insertUser($nome,$email,$senha);
    }
    public function updateUser($id_user,$nome,$email,$senha){
        $this->obj->updateUser($id_user,$nome,$email,$senha);
    }
   
}
$objControl = new ControllerUser();
if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['_incluir']) && $_POST['_incluir'] == "_incluir"){
            $objControl->setUser($_POST['nome'], $_POST['email'], $_POST['senha']);
    }
    else if(isset($_POST['_update']) && $_POST['_update'] == "_update"){
        $objControl->updateUser($_POST['nome'], $_POST['email'], $_POST['senha']);    
    }
}
?>