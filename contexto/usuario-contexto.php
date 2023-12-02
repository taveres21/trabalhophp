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

    echo $usuario['senha'];
    
    return $usuario['senha'] == $senha;
    
}

function Cadastro(
    string $nome,string $dtnasc, string $email, 
    string $senha
    ) {

    $conn = AbrirConexaoBanco();
    
    // Verificar se já existe email cadastrado
   
    $mysql_query = "SELECT
     `email`
     FROM `usuario`
     WHERE `email` = '$email';";

    if ($conn->query($mysql_query) <> null) {
        
        return false;
    }
    
    $max_id = mysqli_fetch_assoc($conn->query("SELECT max(id) maxid FROM usuario;"));
    $id = $max_id['maxid'] + 1;

    $mysql_query = "INSERT INTO `usuario` 
    (`id`,`nome`,`dt_nasc`,`email`,`senha`)
    VALUES
    ($id,'$nome','$dtnasc','$email','$senha')
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