<?php

require_once('../contexto/livro-contexto.php');

$email  = '';
$senha  = '';
$id     =  0;
$dtnasc = '';

$acao = $_GET["acao"] ?? "";

switch ($acao) {
    case "":
        require_once('../index.php');
        break;
    case "entrar":
        
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $hash = password_hash($senha,PASSWORD_DEFAULT);
        if(password_verify($senha,$hash)){
            session_start();

            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["email"] = $email; 
        }else{

        }
        # Valida usuário
        exit;

        if (true) {
            require_once('../view/home-view.php');
        }else {
            require_once('../index.php');
        }
        break;
    case "cadastrar":
        $email  = $_POST["email"];
        $senha  = $_POST["senha"];
        $dtnasc = $_POST["dtnasc"];
        $nome   = $_POST["nome"];

        break;
    case "sair":
        require_once('../index.php');
        break;
}

?>