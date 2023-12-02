<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
    <title>Document</title>
    <link rel='stylesheet' href='../public/styles/consultar-livros-salvos.css'>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/85707a4b86.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
    <div class="cabecalho">
        <h2>Consultar Listas Salvas</h2>
    </div>
    <div class="livros-container menu-container">
        <div class="menu-secundario search-bar">
          <form action="livro.php?acao=consultar" method="POST">
            <input placeholder="Pesquisar por nome do livro ou autor..." class="input-busca" type="text" id="pesquisa" name="pesquisa" value="<?=$_POST["pesquisa"] ?? ""?>">
            <div class="search-right search-bar">
                <button class="button-buscar" type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
                <a style="color: white;text-decoration: none;cursor: pointer;" href="../controller/lista.php?acao=cadastrar"><button class="button-buscar" type="button"><i class="fa-solid fa-plus" style="color: #ffffff;"></i></button></a>
            </div>
          </form>
        </div>
    </div>
    <div class="livros-container">
    <table class="table table-striped">
      <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome da Lista</th>
      <th scope="col">Livros</th>
      <th style="width: 0;" scope="col">Editar</th>
      <th style="width: 0;" scope="col">Remover</th>
    </tr>
  </thead>
  <tbody>
    <?php

      if (isset($_REQUEST["listas"])) {
        $dados = $_REQUEST["listas"];
        if(count($dados) > 0){
          for ($i=0; $i < count($dados); $i++) {
            echo "
            <tr>
              <th scope='row'>".$dados[$i]["id"]."</th>
              <td>".$dados[$i]["nome"]."</td>
              <td>".$dados[$i]["livros"]."</td>
              <td align='center'><a href='../controller/livro.php?acao=editar&id=".$dados[$i]["id"]."' class='editar' title='Editar'><img src='../public/pen.png' alt='Editar'></a></td>
              <td align='center'><a href='../controller/livro.php?acao=deletar&id=".$dados[$i]["id"]."' class='excluir' title='Excluir'><img src='../public/delete.png' alt='Excluir'></a></td>
            </tr> 
            ";
          }
        }else {
          echo "<tr><td colspan='7' align='center'>Nenhum registro foi encontrado!</td></tr>";
        }
      }
    ?>
  </tbody>

  </table>
    </div>
    </main>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>