<?php

require_once('conexao.php');

function Login(string $email, string $senha) {
    $conn = AbrirConexaoBanco();

    $mysql_query = "SELECT
     `id`,`email`,`senha` 
     FROM `usuario`
     WHERE `email` = '$email';";

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
    
    return $usuario['senha'] == $senha;
    
}


?>