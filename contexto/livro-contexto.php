<?php

require_once('conexao.php');

function AdicionarLivro(int $isbn,string $titulo,string $sinopse,string $autor) : int {
    $conn = AbrirConexaoBanco();

    $mysql_query = "INSERT INTO `livro`
    (`isbn`,
    `titulo`,
    `sinopse`,
    `autor`)
    VALUES
    ($isbn,
    '$titulo',
    '$sinopse',
    '$autor');";

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

function AlterarLivro(int $id, int $isbn,string $titulo,string $sinopse,string $autor) : bool {
    $conn = AbrirConexaoBanco();
    $mysql_query = "UPDATE `livro`
    SET
    `isbn` = $isbn,
    `titulo` = '$titulo',
    `sinopse` = \"$sinopse\",
    `autor` = '$autor'
    WHERE `id` = $id;
    ";

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

function DeletarLivro(int $id): bool{
    $conn = AbrirConexaoBanco();
    $mysql_query = "DELETE FROM `livro`
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
    `isbn`,
    `titulo`,
    `sinopse`,
    `autor`
    FROM `livro` WHERE `id` = $id;";

    $result = $conn->query($mysql_query);

    if ($result === TRUE) {
        $msg =  "select success";
        $msgerror = "";
    }
    else {
        $msg =  "select error";
        $msgerror = $conn->error;
    }

    $livro = mysqli_fetch_assoc($result);

    FecharConexaoBanco($conn);

    return $livro;
}

function SelecionarTodosLivros(string $pesquisa = "") : array {
    $conn = AbrirConexaoBanco();

    $mysql_query = "SELECT `l`.`id`,
    `l`.`isbn`,
    `l`.`titulo`,
    `l`.`sinopse`,
    `l`.`autor`
    FROM `livro` as `l`
    WHERE IF('$pesquisa' <> '',CONCAT(`l`.`isbn`,`l`.`titulo`,`l`.`sinopse`,`l`.`autor`) LIKE CONCAT('%',REPLACE('$pesquisa','','%'),'%'),true);";

    $result = $conn->query($mysql_query);

    if ($result === TRUE) {
        $msg =  "select success";
        $msgerror = "";
    }
    else {
        $msg =  "select error";
        $msgerror = $conn->error;
    }
    
    $livros = array();

    if($result){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $livros[] = [
                    'id' => $row["id"],
                    'isbn' => $row["isbn"],
                    'titulo' => $row["titulo"],
                    'sinopse' => $row["sinopse"],
                    'autor'=>$row["autor"]
                ];
            }
        }
    }

    FecharConexaoBanco($conn);

    return $livros ?? array();
}

?>