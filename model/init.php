<?php

$bd = 0;

if($bd == 1){
    date_default_timezone_set('America/Sao_Paulo');
    define('BD_SERVIDOR','localhost');
    define('BD_USUARIO','clickm67_user');
    define('BD_SENHA','Click123@mkt');
    define('BD_BANCO','clickm67_sistema');
} else {
    date_default_timezone_set('America/Sao_Paulo');
    define('BD_SERVIDOR','localhost');
    define('BD_USUARIO','root');
    define('BD_SENHA','');
    define('BD_BANCO','sistema');
}

?>