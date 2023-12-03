<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        header('Location: ../index.php');
    }
    require_once('../contexto/lista-contexto.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='../public/styles/menu.css'>
    <title>Listas de <?php echo $_SESSION['nome']; ?></title>
</head>
<body>
    <div class="menu-panel">
        <div class="menu-nav">
            <h3 class="d-inline">Listas de <?php echo $_SESSION['nome']?></h3>
            <form class="d-inline" action="../controller/login.php?acao=sair" method="POST" role="search">
                <button class="btn btn-danger" type="submit">Sair</button>
            </form>
        </div>
        <div class="menu-content">
            <ul>
                <li id="add-lista">Add</li>
                <?php 
                    $listas = SelecionarTodasListas($_SESSION['id']);
                    foreach($listas as $lista) {
                        echo "<li>". $lista['nome'].'</li>';
                    }
                ?>
            </ul>
        </div>
        <div id="menu-add-lista" class="menu-add-lista">
            <h3>Adicionar Lista</h3>
            <form class="login-form" action="../controller/lista.php?acao=cadastrar" method="post">
                <div class="form-group">
                    <input placeholder="nome" type="text" id="nome" name="nome">
                </div>
                <div class="form-group" id="form-buttons-login">
                    <button  class="btn btn-primary" type="submit" >Criar Lista</button>
                    <button  id="close" type="submit">Fechar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script>
        const open = document.getElementById('add-lista');
        const menuAddLista = document.getElementById('menu-add-lista');
        const close = document.getElementById('close');
        
        open.addEventListener('click', () => {
            menuAddLista.classList.add('show');
        });
        close.addEventListener('click', () => {
            menuAddLista.classList.remove('show');
        });
    </script>
</body>
</html>