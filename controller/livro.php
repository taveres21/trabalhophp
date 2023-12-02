<?php

require_once('../contexto/livro-contexto.php');

$acao = $_GET["acao"];
$method = $_SERVER['REQUEST_METHOD'];

switch ($acao) {
    
    case "consultar":
        //Tela Consulta. Ação: Entrar na página
        if ($method == "GET") {
            $_REQUEST["livros"] = SelecionarTodosLivros();
            require_once("../view/livro-consulta-view.php");
        }
        //Tela Consulta. Ação: Pesquisar no input
        if($method == "POST") {
            $pesquisa = $_POST["pesquisa"] ?? "";
            $_REQUEST["livros"] = SelecionarTodosLivros($pesquisa);
            require_once("../view/livro-consulta-view.php");
        }
        break;
    case "cadastrar":
        //Tela Cadastrar. Ação: Entrar na página
        if ($method == "GET") {
            require_once("../view/livro-view.php");
        }
        //Tela Cadastrar. Ação: Cadastrar livro
        if($method == "POST") {
            $isbn = (int)$_POST["isbn"] ?? 0;
            $titulo = $_POST["titulo"] ?? "";
            $sinopse = $_POST["sinopse"] ?? "";
            #$autor = $_POST["autor"] ?? "";
            AdicionarLivro($isbn,$titulo,$sinopse,$autor);

            header('Location: livro.php?acao=consultar');
        }
        break;
    case "editar":
        //Tela Editar. Ação: Entrar na página
        if ($method == "GET") {
            $id = $_GET["id"];
            $_REQUEST["livro"] = SelecionarLivroPorId($id);
            require_once("../view/livro-view.php");
        }
        //Tela Editar. Ação: Editar livro
        if($method == "POST") {
            $id = (int)$_POST["id"] ?? 0;
            $isbn = (int)$_POST["isbn"] ?? 0;
            $titulo = $_POST["titulo"] ?? "";
            $sinopse = $_POST["sinopse"] ?? "";
            #$autor = $_POST["autor"] ?? "";
            AlterarLivro($id,$isbn,$titulo,$sinopse,$autor);

            header('Location: livro.php?acao=consultar');
        }
        break;
    case "deletar":
        //Tela Deletar. Ação: Entrar na página
        if ($method == "GET") {
            $id = $_GET["id"];
            DeletarLivro($id);
            
            header('Location: livro.php?acao=consultar');
        }
        //Tela Deletar. Ação: Deletar livro
        if($method == "POST") {
            //Implementar
        }
        break;
}

?>