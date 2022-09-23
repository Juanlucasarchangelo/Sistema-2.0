<?php

$bd = 0;

if($bd ==1){
    define('HOST', 'localhost');
    define('USUARIO', 'clickm67_user');
    define('SENHA', 'Click123@mkt');
    define('DB', 'clickm67_sistema');
} else {
    define('HOST', 'localhost');
    define('USUARIO', 'root');
    define('SENHA', '');
    define('DB', 'sistema');
}

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possivel conectar!');

?>