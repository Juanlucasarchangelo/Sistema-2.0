<?php
require_once('class.dao.php');

$obj = new Dao();
$obj->conexao();
$obj->getInfo();

?>