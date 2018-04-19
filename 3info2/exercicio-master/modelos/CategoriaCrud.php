<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 01/03/18
 * Time: 16:36
 */
require_once "Conexao.php";
require_once "Categoria.php";

class CategoriaCrud
{
    private $conexao;
    public function getCategorias(){
//lista
        $this->conexao = Conexao::getConexao();
        $sql = "select * from categoria order by nome_categoria";
        $resultado = $this->conexao->query($sql);

//        $categorias = $resultado->fetchAll (PDO::FETCH_CLASS, 'Categoria',['nome_categoria', 'descricao_categoria','id_categoria']);
        $categorias = $resultado->fetchAll (PDO::FETCH_ASSOC);
        $listaCategorias = [];
        foreach ($categorias as $categoria){
            $listaCategorias[]=new Categoria($categoria['nome_categoria'], $categoria['descricao_categoria'], $categoria['id_categoria']);
        }

        return $listaCategorias;
    }

    function getCategoria($id){
        $this->conexao = Conexao::getConexao();
        $sql = "select * from categoria WHERE id_categoria = ". $id;
        $resultado = $this->conexao->query($sql);

        $categoria = $resultado->fetch (PDO::FETCH_ASSOC);

        $objcat = new Categoria($categoria['nome_categoria'], $categoria['descricao_categoria'], $categoria['id_categoria']);

        return $objcat;
    }

    function insertCategoria(Categoria $categoria){
        $this->conexao = Conexao::getConexao();
        $sql = "insert into categoria (nome_categoria, descricao_categoria) VALUES ('{$categoria->getNome()}', '{$categoria->getDescricao()}')";
        $this->conexao->exec($sql);

    }

    function UPDATE(Categoria $categoria){
        $sql = "UPDATE categoria SET nome_categoria =".$categoria->getNome()." , descricao_categoria = " . $categoria->getDescricao()." WHERE  id_categoria =".$categoria->getId();
    }

}

//
//$crud = new CategoriaCrud();
//$categoria = $crud->getCategorias();
//
//var_dump($categoria);