<?php

require_once('conexao.php');
session_start();

function Login(string $email, string $senha) {
    $conn = AbrirConexaoBanco();

    $mysql_query = "SELECT
     `id`,`email`,`senha`,`nome`,`dt_nasc` 
     FROM `usuario`
     WHERE `email` = '$email' and `senha`= '$senha';";

    $result = $conn->query($mysql_query);

    if ($result === TRUE) {

        $msq = "select success";
        $msgerror = "";
    } else {
        $msg = "select error";
        $msgerror = $conn->error;
    }

    $usuario = mysqli_fetch_assoc($result);

    FecharConexaoBanco($conn);
    
    return $usuario; 
}

function Cadastro(
    string $nome,string $dtnasc, string $email, 
    string $senha
    ) {

    $conn = AbrirConexaoBanco();
   
    $mysql_query = "SELECT
     `email`
     FROM `usuario`
     WHERE `email` = '$email';";

    $checkUser = mysqli_fetch_assoc($conn->query($mysql_query));

    if ($checkUser['email'] <> null) {      
        return false;
    }
    
    $mysql_query = "INSERT INTO `usuario` 
    (`nome`,`dt_nasc`,`email`,`senha`)
    VALUES
    ('$nome','$dtnasc','$email','$senha')
    ";

    $result = $conn->query($mysql_query);

    if ($result === TRUE) {
        $msg = "insert success";
        $msgerror = "";
    } else {
        $msg = "insert error";
        $msgerror = $conn->error;
    }

    FecharConexaoBanco($conn);
    
    return $result;
}

?>