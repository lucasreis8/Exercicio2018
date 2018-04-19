<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 01/03/18
 * Time: 16:19
 */
require_once "Categoria.php";
require_once "CategoriaCrud.php";


$c1 = new Categoria("Mercado", "coisas que a gente compra");
//var_dump($p1);

$crudCategoria = new CategoriaCrud();

$crudCategoria->insertCategoria($c1);
