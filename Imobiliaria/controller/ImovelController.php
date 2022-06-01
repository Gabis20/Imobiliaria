<?php
require_once '../model/Imovel.php';

class ImovelController{

    public static function salvar()
    {

        $imovel = new Imovel;

        $imovel->setTipo($_POST['tipo']);
        $imovel->setPreco($_POST['preco']);
        $imovel->setDescricao($_POST['descricao']);

        $imovel->save();
    }
    public static function listar()
    {
        $imovel = new Imovel;

        return $imovel->listAll();
    }
}
?>