<?php

require_once('../model/class.info.php');

class controlletInfo{

    public function verificaLogin($usuario, $senha){

        include('conexao.php');

        if(empty($usuario) || empty($senha)){
            header('location: ../index.php');
            exit;
        } else {
            
            $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
            $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
            
            $query = "SELECT * FROM usuario WHERE email = '{$usuario}' AND senha = md5('{$senha}')";
            
            $result = mysqli_query($conexao, $query);
            
            $row = mysqli_num_rows($result);
            
            if($row == 1){
                header('Location: ../view/painel.php');
                exit();
            } else {
                header('Location: ../index.php');
            }
        }
    }
}

?>