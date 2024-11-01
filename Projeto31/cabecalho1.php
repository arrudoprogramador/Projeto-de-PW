<!--Nav COM CADASTRO-->
<nav class="navbar navbar-expand-xl	bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Novidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Promoção</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./areaAdmin/home/index.php">Admin</a>
          </li>
        </ul>

        <!-- Formulário de busca centralizado -->
        <form class="d-flex mx-auto" role="search">
          <div class="search1">
            <input class="form-control me-2" type="search" placeholder="Digite o produto" aria-label="Search">
          </div>
        </form>

        <div class="ms-auto"> <!-- Adicionado para alinhar os botões à direita -->
          <a class="btn btn-outline-primary me-2" href="#">Meu Carrinho</a>
          <a class="btn btn-outline-primary me-2" href="#">Meu Favorito</a>
          <a class="btn btn-outline-primary me-2" href="logoff.php">Sair</a>
        </div>
      </div>
      <?php
        include_once 'scriptBootstrap.php'
      ?>
    </div>
  </nav>