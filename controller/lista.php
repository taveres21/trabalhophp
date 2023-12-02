<?php

require_once('../contexto/livro-contexto.php');

$acao = $_GET["acao"];
$method = $_SERVER['REQUEST_METHOD'];

switch ($acao) {
    
    case "consultar":
        //Tela Consulta. Ação: Entrar na página
        if ($method == "GET") {
            #$_REQUEST["livros"] = SelecionarTodosLivros();
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
           // require_once("../view/livro-view.php");
        }
        //Tela Cadastrar. Ação: Cadastrar Lista
        if($method == "POST") {
            /*$isbn = (int)$_POST["isbn"] ?? 0;
            $titulo = $_POST["titulo"] ?? "";
            $sinopse = $_POST["sinopse"] ?? "";
            AdicionarLivro($isbn,$titulo,$sinopse);

            header('Location: livro.php?acao=consultar');*/
        }
        break;
}

?>