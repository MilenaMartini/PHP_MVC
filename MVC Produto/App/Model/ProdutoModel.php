<?php

class ProdutoModel
{
    public $id, $Produto, $Estoque, $Preco, $ID_categoria;

    public $rows;

    public function save()
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        $dao->insert($this);

    }

    public function getAllRows()
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        $this->rows = $dao->select();


    }
}