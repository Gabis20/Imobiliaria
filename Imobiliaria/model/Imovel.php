<?php

require_once 'Banco.php';
require_once '../Conexao.php';

class Imovel extends Banco{

    private $idm;
    private $tipo;
    private $preco;
    private $descricao;

    public function getIdm(){
        return $this->idm;
    }
    public function setIdm($idm){
        $this->idm = $idm;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function save(){

        # $result = false;

        $conexao = new Conexao();

        $query = "Insert into imovel (idm, tipo, preco, descricao) values (null,:tipo,:preco,:descricao,)";

        if($conn = $conexao->getConection()){

            $stmit = $conn->prepare($query);

            if($stmit->execute(array(':tipo' => $this->tipo, ':preco' => $this->preco, ':descricao' => $this->descricao))){
                $result = $stmit->rowCount();
            }
        }
        return $result;
    }
    public function remove($id){
        
    }
    public function find($id){
        
    }
    public function listAll(){
         $conexao = new Conexao();

         $conn = $conexao->getConection();

         $query = "SELECT * FROM Imovel";

         $stmit = $conn->prepare($query);

         $result = array();

         if($stmit-> execute()) {

            while ($rs = $stmit->fetchobject(Imovel::class)) {

                $result[] = $rs;
            }
         }else{
             $result = false;
         }
    }
    public function count(){
        
    }
}
?>