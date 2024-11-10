<!--Nav COM CADASTRO-->
<nav class="navbar navbar-expand-xl	bg-body-tertiary fixed-top">
    <div class="container-fluid">

      <!-- Logo da Empresa -->
    <a class="navbar-brand" href="index.php">
            <img src="./../img/Logo.png" alt="Logo" style="height: 40px;"> <!-- A imagem da logo -->
      </a>
      <!-- Botão para navegação responsiva -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu de navegação -->
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="./../areaUsuario/produtos.php">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../areaUsuario/contatos.php">Contatos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../areaUsuario/sobre.php">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../areaAdmin/home/index.php">Admin</a>
          </li>
        </ul>

        <!-- Formulário de busca centralizado -->
        <form class="d-flex mx-auto" role="search">
          <div class="search1">
            <input class="form-control me-2" type="search" placeholder="Digite o produto" aria-label="Search">
          </div>
        </form>

        <div class="ms-auto"> <!-- Adicionado para alinhar os botões à direita -->
          <a class="btn btn-outline-primary me-2" href="/areaUsuario/carrinho.php">Meu Carrinho</a>
          <a class="btn btn-outline-primary me-2" href="/areaUsuario/favoritos.php">Meu Favorito</a>
          <a class="btn btn-outline-primary me-2" href="/componentes/logoff.php">Sair</a>
        </div>
      </div>
      <?php
        include_once 'scriptBootstrap.php';
      ?>
    </div>
  </nav>