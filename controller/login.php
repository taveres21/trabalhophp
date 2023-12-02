<?php

require_once('../contexto/livro-contexto.php');

$acao = $_GET["acao"] ?? "";

switch ($acao) {
    case "":
        require_once('../view/login-view.php');
        break;
    case "entrar":
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $hash = password_hash($senha,PASSWORD_DEFAULT);
        if(password_verify($senha,$hash)){
            session_start();

            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["email"] = $username; 
        }else{

        }
        # Valida usuário
        exit;

        if (true) {
            require_once('../view/home-view.php');
        }else {
            require_once('../view/login-view.php');
        }
        break;
    case "cadastrar":
        require_once('../view/cadastrar-view.php');
        break;
    case "sair":
        require_once('../view/login-view.php');
        break;
}

?>