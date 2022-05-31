<?php

class PessoaModel
{
    public $id, $nome, $cpf, $data_nasc;

    public $rows;

    public function save()
    {
        include 'DAO/PessoaDAO.php';//incluindo arquivos da dao
//conexão no bd via construtor
        $dao = new PessoaDAO();


        if(empty($model->id))
        {
            $dao->insert($this);
        }else{

            $dao->update($this);

        }
       
    }

    public function getAllRows()
    {
        include 'DAO/PessoaDAO.php';

        //conexão via construtor
        $dao = new PessoaDAO();

        
        $this->rows = $dao->select();


    }


    public function getById(int $id)
    {

        include 'DAO/PessoaDAO.php';//incluindo arquivos da dao

        $dao = new PessoaDAO();

        $obj =  $dao->selectById($id);

        return ($obj) ? $obj : new PessoaModel;
        /*if($obj)
        {
            return $obj;
        }else{
            return new PessoaModel();
        }*/
    }
}




