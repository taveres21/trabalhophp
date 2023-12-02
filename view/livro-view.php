<?php

$codigo = 0;
$isbn = 0;
$titulo = "";
$autor = "";
$sinopse = "";

if (isset($_REQUEST["livro"])) {
    $dados = $_REQUEST["livro"];

    $codigo = $dados["id"];
    $isbn = $dados["isbn"];
    $titulo = $dados["titulo"];
    #$autor = $dados["autor"];
    $sinopse = $dados["sinopse"];
}

$actionForm = $codigo === 0 ? "livro.php?acao=cadastrar" : "livro.php?acao=editar&id=$codigo";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
    <title><?=($codigo != 0 ? "Edição" : "Cadastro")?> de livro</title>
    <link rel='stylesheet' href='../public/styles/consultar-livros-salvos.css'>
</head>
<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <div class="livros-container">
            <h2><?=($codigo != 0 ? "Edição" : "Cadastro")?></h2>
            <form class="login-form" action="<?=$actionForm?>" method="post">
                <div class="form-group d-none">
                    <label for="id">Id do livro</label>
                    <input type="number" class="form-control" id="id" name="id" value="<?=$codigo?>">
                </div>
                <div class="form-group">
                    <label for="codigo">ISBN</label>
                    <input type="number" class="form-control" id="isbn" name="isbn" required value="<?=$isbn?>">
                </div>
                <div class="form-group">
                    <label for="text">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required value="<?=$titulo?>">
                </div>
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" id="autor" name="autor" required value="<?=$autor?>">
                </div>
                <div class="form-group">
                    <label for="sinopse">Sinopse</label><br>
                    <textarea id="sinopse" class="form-control" name="sinopse" rows="4" required><?=$sinopse ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
                    <a class="btn btn-primary" href="livro.php?acao=consultar">Consulta</a>
                </div>
            </form>
        </div>
    </main>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>