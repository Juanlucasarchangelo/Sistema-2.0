<?php

session_start();

include('conexao.php');

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT * FROM usuario WHERE email = '{$usuario}' AND senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: ../view/painel.php');
    exit();
} else {
    header('Location: ../index.php');
    $_SESSION['nao_autenticado'] = true;
}

?>