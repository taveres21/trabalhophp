<header>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="./login.php?acao=home">Booklist</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="./livro.php?acao=consultar">Livro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./lista.php?acao=consultar">Listas</a>
            </li>
        </ul>
        <form class="d-flex" action="./login.php?acao=sair" method="POST" role="search">
            <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
            <button class="btn btn-danger" type="submit">Sair</button>
        </form>
    </div>
    </div>
    </nav>
</header>
