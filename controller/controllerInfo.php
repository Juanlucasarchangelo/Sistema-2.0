<?php
require_once('../model/class.info.php');
class ControllerInfo
{
    private $obj;
    function __construct()
    {
        $this->obj = new Info();
        $this->obj->conexao();
    }

    public function getTodosFunc()
    {
        $this->obj->conexao();
        $this->obj->getInfo();
    }

    public function setInfo($nome_prod, $quantidade, $valor_unitario)
    {
        $this->obj->insertInfo($nome_prod, $quantidade, $valor_unitario);
    }
    public function updateInfo($id_camp, $nome_prod, $quantidade, $valor_unitario)
    {
        $this->obj->updateInfo($id_camp, $nome_prod, $quantidade, $valor_unitario);
    }
    public function deleteInfo($id_camp)
    {
        $this->obj->delete_Info($id_camp);
    }

}
$objControl = new ControllerInfo();
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['_incluir']) && $_POST['_incluir'] == "_incluir") {
        $objControl->setInfo($_POST['nome_prod'], $_POST['quantidade'], $_POST['valor_unitario']);

    } else if (isset($_POST['_update']) && $_POST['_update'] == "_update") {
        $objControl->updateInfo($_POST['id_camp'], $_POST['nome_prod'], $_POST['quantidade'], $_POST['valor_unitario']);
    }
}
if (isset($_GET['id_camp'])) {
    $objControl->deleteInfo($_GET['id_camp']);
}
