<?php

class ProdutoDAO
{
    private $conexao;
//metodo construtor
    public function __construct()
    {
         // Criando a conexão
        $dsn = "mysql:host=localhost:3307;dbname=db_mvc";

        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }


    public function insert(ProdutoModel $model)
    {
        //trecho sql com ? para substituições posteriores
        $sql = "INSERT INTO Produto(Produto, Estoque, Preco, ID_categoria) VALUES (?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->Produto);
        $stmt->bindValue(2, $model->Estoque);
        $stmt->bindValue(3, $model->Preco);
        $stmt->bindValue(4, $model->ID_categoria);


        $stmt->execute();

    }

    public function update(ProdutoModel $model)
    {

        $sql = "UPDATE pessoa SET Produto=?, Estoque=?, Preco=?, ID_categoria=?) VALUES (?, ?, ?, ?)";
       
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->Produto);
        $stmt->bindValue(2, $model->Estoque);
        $stmt->bindValue(3, $model->Preco);
        $stmt->bindValue(4, $model->ID_categoria);
        $stmt->execute();

    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM produto WHERE id= ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();


       

    }

    public function select()
    {
        $sql = "SELECT * FROM Produto";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();


        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }




}