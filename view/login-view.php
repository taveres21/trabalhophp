<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./styles/login.css'>
    <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='../public/styles/consultar-livros-salvos.css'>
    <title>Login</title>
</head>
<body>
<main class="main">
    <div class="livros-container"> 
    <div class="cabecalho">
        <h2>Entrar</h2>
    </div>
    <div class="login-container">
            <form class="login-form" action="../controller/login.php?acao=entrar" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="senha" id="senha" name="senha" required>
                </div>
                <div class="form-group">
                    <button type="submit">Entrar</button>
                    <a href="./signup.php">Cadastrar</a>
                </div>
            </form>
        </div>
    </main>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>