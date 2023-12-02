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

        $usuario = Login($email, $senha);

        if ($usuario <> null) {
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['dt_nasc'] = $usuario['dt_nasc'];
            $_SESSION['email'] = $usuario['email'];
            
            header('Location: ../view/home-view.php');
        }else {
            header('Location:../index.php?Invalid= Usuário e senha incorretos');
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
            header('Location: ../index.php');
        } else {
            header('Location: ../view/cadastrar-view.php');
        }

        break;
    case "sair":
        session_destroy();
        header('Location: ../index.php');
        break;
}

?>