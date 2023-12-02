<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Livros</title>
    <link rel='stylesheet' href='./styles/consultar-livros-salvos.css'>
</head>
<body>
    <div class="consultar-livros-container">
        <h2>Pesquisar Livros</h2>
        <div class="search-bar">
            <span for="nomeLivro">Nome do Livro ou Autor:</span>
            <input type="text" id="nomeLivro" name="nomeLivro" required>
            <button type="button" onclick="pesquisarLivro()">Buscar</button>
        </div>

        <!-- Janela flutuante -->
        <div class="janela-flutuante escondida">
            <ul class="lista-livros">
                <!-- Exemplo de item da lista -->
                <li>
                <span>Bíblia Sagrada | Deus</span>
                <span class="opcoes">
                    <a href="#" class="editar" title="Editar"><img src="pen.png" alt="Editar"></a>
                    <a href="#" class="excluir" title="Excluir"><img src="delete.png" alt="Excluir"></a>
                </span>

                <span>A Arte da Guerra | Sun Tzu</span>
                <span class="opcoes">
                    <a href="#" class="editar" title="Editar"><img src="pen.png" alt="Editar"></a>
                    <a href="#" class="excluir" title="Excluir"><img src="delete.png" alt="Excluir"></a>
                </span>

                <span>Romeu e Julieta | William Shakespeare</span>
                <span class="opcoes">
                    <a href="#" class="editar" title="Editar"><img src="pen.png" alt="Editar"></a>
                    <a href="#" class="excluir" title="Excluir"><img src="delete.png" alt="Excluir"></a>
                </span>

                <span>Moby Dick | Herman Melville</span>
                <span class="opcoes">
                    <a href="#" class="editar" title="Editar"><img src="pen.png" alt="Editar"></a>
                    <a href="#" class="excluir" title="Excluir"><img src="delete.png" alt="Excluir"></a>
                </span>

                <span>Cinquenta Tons de Cinza | E.L.James</span>
                <span class="opcoes">
                    <a href="#" class="editar" title="Editar"><img src="pen.png" alt="Editar"></a>
                    <a href="#" class="excluir" title="Excluir"><img src="delete.png" alt="Excluir"></a>
                </span>

                <span>Em Busca do Tempo Perdido | Marcel Proust</span>
                <span class="opcoes">
                    <a href="#" class="editar" title="Editar"><img src="pen.png" alt="Editar"></a>
                    <a href="#" class="excluir" title="Excluir"><img src="delete.png" alt="Excluir"></a>
                </span>

                <span>Dom Quixote | Miguel de Cervantes</span>
                <span class="opcoes">
                    <a href="#" class="editar" title="Editar"><img src="pen.png" alt="Editar"></a>
                    <a href="#" class="excluir" title="Excluir"><img src="delete.png" alt="Excluir"></a>
                </span>

                <span>Cem Anos de Solidão | Gabriel García Márquez</span>
                <span class="opcoes">
                    <a href="#" class="editar" title="Editar"><img src="pen.png" alt="Editar"></a>
                    <a href="#" class="excluir" title="Excluir"><img src="delete.png" alt="Excluir"></a>
                </span>

                <span>Os Irmãos Karamazov | Fiódor Dostoiévski</span>
                <span class="opcoes">
                    <a href="#" class="editar" title="Editar"><img src="pen.png" alt="Editar"></a>
                    <a href="#" class="excluir" title="Excluir"><img src="delete.png" alt="Excluir"></a>
                </span>

                
                </li> 
            </ul>
        </div>
    </div>

    <script>
        function pesquisarLivro() {
            // Lógica de pesquisa aqui

            // Exemplo: Mostra a janela flutuante quando um livro é pesquisado
            var janelaFlutuante = document.querySelector('.janela-flutuante');
            janelaFlutuante.classList.remove('escondida');
        }
    </script>
</body>
</html>
