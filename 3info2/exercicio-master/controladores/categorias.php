<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 11/04/18
 * Time: 13:23
 * ação do usuário e faz alguma coisa
 */


require_once '../modelos/CategoriaCrud.php';


if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

    switch ($acao){

        case 'index';

            $crud = new CategoriaCrud();
            $categorias = $crud->getCategorias();

            include '../visoes/templates/cabecalho.php';
            include '../visoes/categoria/index.php';;
            include '../visoes/templates/rodape.php';;

            break;



        case'show':
            $id = $_GET['id'];
            $crud = new CategoriaCrud();
            $categoria = $crud->getCategoria($id);
            include '../visoes/templates/cabecalho.php';
            include '../visoes/categoria/show.php';
            include '../visoes/templates/rodape.php';
            break;
        case 'inserir';
            if (!isset($_post['gravar'])){
                include '../visoes/templates/cabecalho.php';
                include "../visoes/categoria/inserir.php";
                include '../visoes/templates/rodape.php';
            }



    }




