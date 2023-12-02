<?php

require_once('../contexto/usuario-contexto.php');

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
            echo 'teste';
            header('../index.php');
        }

        $usuario = Login($email, $senha);

        if ($usuario) {
            require_once('../view/home-view.php');
            //Configurar session
        }else {
            // Avisar senha incorreta ou usuário inexistente e corrigir a falta do css
            require_once('../index.php');
        }

        exit;
        break;
    case "cadastrar":
        $nome   = $_POST["nome"];
        $dtnasc = $_POST["dtnasc"];
        $email  = $_POST["email"];
        $senha  = $_POST["senha"];
       
        $confirma = cadastro($nome,$dtnasc,$email,$senha);

        if ($confirma) {
            require_once('../index.php');
        } else {
            require_once('../view/cadastrar-view.php');
        }

        break;
    case "sair":
        require_once('../index.php');
        break;
}

?>