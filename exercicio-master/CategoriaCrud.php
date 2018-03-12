<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 01/03/18
 * Time: 16:36
 */
    require "Conexao.php";
    require "Categoria.php";
class CategoriaCrud
{
    private $conexao;
    public function getCategorias(){
//lista
        $this->conexao = Conexao::getConexao();
        $sql = "select * from categoria order by nome_categoria";
        $resultado = $this->conexao->query($sql);

        $categorias = $resultado->fetchAll (PDO::FETCH_ASSOC);

        $listaCategorias = [];
        foreach ($categorias as $categoria){
            $listaCategorias[] = new Categoria($categoria['id_categoria'], $categoria['nome_categoria'], $categoria['descricao_categoria']);
        }

        return $listaCategorias;
    }

    function getCategoria($id){
        $this->conexao = Conexao::getConexao();
        $sql = "select * from categoria WHERE id_categoria";
        $resultado = $this->conexao->query($sql);

        $categoria = $resultado->fetch (PDO::FETCH_ASSOC);

        return $categoria;
    }

}


$crud = new CategoriaCrud();
$categoria = $crud->getCategoria('1');

var_dump($categoria);