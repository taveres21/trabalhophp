<?php 

    require_once('conexao.php');
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='./public/styles/index.css'>
    <title>Booklist</title>
</head>
<body>
    <div class="welcome-container">
        <h1>Bem-vindo ao Booklist!</h1>
        <p>Mantenha uma lista de todos os livros que leu!</p>
        <div class="login-container">
            <form class="login-form" action="../controller/login.php?acao=entrar" method="post">
                <div class="form-group">
                    <input placeholder="Email" type="text" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <input placeholder="Senha" type="password" id="senha" name="senha" required>
                </div>
                <div class="form-group" id="form-buttons-login">
                    <button  class="btn btn-primary" type="submit">Entrar</button>
                    <a class="btn btn-secondary" href="./view/cadastrar-view.php">Cadastrar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>