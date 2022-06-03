<?php

class CategoriaModel
{
    public  $id, $Categoria, $Descricao;

    public $rows;

    public function save()
    {
        include 'DAO/CategoriaDAO.php';
        $dao = new CategoriaDAO();


        if(empty($this->id))
        {
            $dao->insert($this);
        }else{

            $dao->update($this);

        }
       
    }

    public function getAllRows()
    {
        include 'DAO/CategoriaDAO.php';

        $dao = new CategoriaDAO();

        
        $this->rows = $dao->select();


    }


    public function getById(int $id)
    {

        include 'DAO/CategoriaDAO.php';

        $dao = new CategoriaDAO();

        $obj =  $dao->selectById($id);

        return ($obj) ? $obj : new CategoriaModel;
     
    }
}




