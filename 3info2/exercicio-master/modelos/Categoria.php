<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 01/03/18
 * Time: 15:57
 */

class Categoria
{
    private $id_categoria;
    private $nome;
    private $descricao;

    /**
     * categoria constructor.
     * @param $id_categoria
     * @param $nome
     * @param $descricao
     */
    public function __construct($nome, $descricao, $id_categoria = null) {

        $this->id_categoria = $id_categoria;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id_categoria;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id_categoria = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
}
