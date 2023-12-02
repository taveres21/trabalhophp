<?php

require_once('../contexto/lista-contexto.php');

$acao = $_GET["acao"];
$method = $_SERVER['REQUEST_METHOD'];

switch ($acao) {
    
    case "consultar":
        //Tela Consulta. Ação: Entrar na página
        if ($method == "GET") {
            $listas = array(
                array(
                 'id' => 1,
                 'nome' => 'Lista de Ação',
                 'livros' => 'Fogo e Água<br>Uma aventura<br>Ação e Reação'
                )
            );

            $_REQUEST["listas"] = $listas;
            require_once("../view/lista-consulta-view.php");
        }
        //Tela Consulta. Ação: Pesquisar no input
        if($method == "POST") {
            /*$pesquisa = $_POST["pesquisa"] ?? "";
            $_REQUEST["livros"] = SelecionarTodosLivros($pesquisa);
            require_once("../view/livro-consulta-view.php");*/
        }
        break;
    case "cadastrar":
        //Tela Cadastrar. Ação: Entrar na página
        if ($method == "GET") {
           require_once("../view/lista-view.php");
        }
        //Tela Cadastrar. Ação: Cadastrar Lista
        if($method == "POST") {
            /*$isbn = (int)$_POST["isbn"] ?? 0;
            $titulo = $_POST["titulo"] ?? "";
            $sinopse = $_POST["sinopse"] ?? "";
            AdicionarLivro($isbn,$titulo,$sinopse);*/

            header('Location: lista.php?acao=consultar');
        }
        break;
        case "editar":
            //Tela Editar. Ação: Entrar na página
            if ($method == "GET") {
                /*$id = $_GET["id"];
                $_REQUEST["livro"] = SelecionarLivroPorId($id);*/
                require_once("../view/lista-view.php");
            }
            //Tela Editar. Ação: Editar lista
            if($method == "POST") {
                /*$id = (int)$_POST["id"] ?? 0;
                $isbn = (int)$_POST["isbn"] ?? 0;
                $titulo = $_POST["titulo"] ?? "";
                $sinopse = $_POST["sinopse"] ?? "";
                #$autor = $_POST["autor"] ?? "";
                AlterarLista($id,$isbn,$titulo,$sinopse/*,$autor*//*);*/
    
                header('Location: lista.php?acao=consultar');
            }
            break;
        case "deletar":
            //Tela Deletar. Ação: Entrar na página
            if ($method == "GET") {
                /*$id = $_GET["id"];
                DeletarLivro($id);*/
                
                header('Location: lista.php?acao=consultar');
            }
            //Tela Deletar. Ação: Deletar lista
            if($method == "POST") {
                //Implementar
            }
            break;
}

?>