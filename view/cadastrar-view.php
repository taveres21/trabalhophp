<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./styles/login.css'>
    <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='../public/styles/login.css'>
    <title>Cadastrar</title>
</head>
<body>
    <main class="main-login">
    <div class="consultar-livros-container login-menu-container">
    <div class="login-container">
            <h2>Entrar</h2>
            <form class="login-form" action="../controller/login.php?acao=entrar" method="post">
                <div class="form-group">
                    <input type="text" id="nome" name="nome" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label for="dtnasc">Data de Nascimento:</label>
                    <input type="date" id="dtnasc" name="dtnasc" value="2018-07-22" min="2018-01-01" max="2018-12-31" />
                </div>
                <div class="form-group">
                    <label for="Email">Email:</label>
                    <input type="text" id="Email" name="Email" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Criar Conta</button>
                    <a href="./signup.php"></a>
                </div>
            </form>
        </div>
        </div>
    </div>
    </main>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

