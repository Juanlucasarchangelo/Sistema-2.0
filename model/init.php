<?php

$bd = 0;

if($bd == 1){
    date_default_timezone_set('America/Sao_Paulo');

    define('BD_SERVIDOR','localhost');
    //usuario para acesso ao BD
    define('BD_USUARIO','clickm67_user');
    //senha de acesso ao BD
    define('BD_SENHA','Click123@mkt');
    //nome do banco de dados
    define('BD_BANCO','clickm67_sistema');
} else {
    date_default_timezone_set('America/Sao_Paulo');

    define('BD_SERVIDOR','localhost');
    //usuario para acesso ao BD
    define('BD_USUARIO','root');
    //senha de acesso ao BD
    define('BD_SENHA','');
    //nome do banco de dados
    define('BD_BANCO','sorteio');
}

?>