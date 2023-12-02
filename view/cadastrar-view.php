<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./styles/login.css'>
    <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='../public/styles/cadastrar.css'>
    <title>Cadastrar</title>
</head>
<body>
    <main class="main-login">
    <div class="consultar-livros-container login-menu-container">
    <div class="login-container">
            <h2>Entrar</h2>
            <form class="login-form" action="../controller/login.php?acao=cadastrar" method="post">
                <div class="form-group">
                    <input type="text" id="nome" name="nome" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label for="dtnasc">Data de Nascimento:</label><br>
                    <input type="date" id="dtnasc" name="dtnasc" value="2018-07-22" min="2018-01-01" max="2018-12-31" />
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="text" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <input placeholder="Senha" type="password" id="senha" name="senha" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" action="../controller/login.php?acao=cadastrar">
                        Criar Conta
                    </button>
                </div>
            </form>
            <?php 
                if(@$_GET['Invalid']==true){
            ?>
                <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
            <?php
                }
            ?>   
        </div>
        </div>
    </div>
    </main>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

