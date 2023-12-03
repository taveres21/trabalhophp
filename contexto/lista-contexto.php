<?php

require_once('conexao.php');

function AdicionarLista(string $nome, string $usu_id) : int {
    $conn = AbrirConexaoBanco();

    $mysql_query = "INSERT INTO `booklist`.`lista`
    (`nome`,`usu_id`)
    VALUES
    ('$nome','$usu_id');
    ";

    $result = $conn->query($mysql_query);

    if ($result === TRUE) {
        $msg =  "insert success";
        $msgerror = "";
    }
    else {
        $msg =  "insert error";
        $msgerror = $conn->error;
    }

    FecharConexaoBanco($conn);

    return 0;
}

function AlterarLista(int $id, string $nome) : bool {
    $conn = AbrirConexaoBanco();
    $mysql_query = "UPDATE `lista`
    SET
    `nome` = $nome
    WHERE `id` = $id;";

    $result = $conn->query($mysql_query);

    if ($result === TRUE) {
        $msg =  "update success";
        $msgerror = "";
    }
    else {
        $msg =  "update error";
        $msgerror = $conn->error;
    }

    FecharConexaoBanco($conn);

    return true;
}

function DeletarLista(int $id): bool{
    $conn = AbrirConexaoBanco();
    $mysql_query = "DELETE FROM `lista`
    WHERE `id` = $id;";

    $result = $conn->query($mysql_query);

    if ($result === TRUE) {
        $msg =  "delete success";
        $msgerror = "";
    }
    else {
        $msg =  "delete error";
        $msgerror = $conn->error;
    }

    FecharConexaoBanco($conn);

    return true;
}

function SelecionarLivroPorId(int $id) : array {
    $conn = AbrirConexaoBanco();

    $mysql_query = "SELECT `id`,
    `nome`
    FROM `lista`;
    WHERE `id` = $id;";

    $result = $conn->query($mysql_query);

    if ($result === TRUE) {
        $msg =  "select success";
        $msgerror = "";
    }
    else {
        $msg =  "select error";
        $msgerror = $conn->error;
    }

    $lista = mysqli_fetch_assoc($result);

    FecharConexaoBanco($conn);

    return $lista;
}

function SelecionarTodasListas(string $usu_id) : array {
    $conn = AbrirConexaoBanco();

    $mysql_query = "SELECT
     `id`,`nome`,`usu_id`
     FROM `lista`
     WHERE `usu_id` = '$usu_id';";

    $result = mysqli_fetch_array($conn->query($mysql_query));
    
    return $result;
}

?>