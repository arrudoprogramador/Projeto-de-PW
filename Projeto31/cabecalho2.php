<!-- Navbar SEM cadastro -->
<link rel="stylesheet" href="css/nav.css">
<script defer src="js/script.js"></script>

<nav class="navbar navbar-expand-xl bg-body-white fixed-top">
    <div class="container-fluid">
        <!-- Logo da Empresa -->
        <a class="navbar-brand" href="#">Logo</a>
        
        <!-- Botão para navegação responsiva -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menu de navegação -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Links da navbar -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Tela inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre</a>
                </li>
            </ul>
                
            <!-- Dropdown do perfil -->
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Perfil
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="login.php">Login</a></li>
                    <li><a class="dropdown-item" href="cadastro.php">Cadastre-se</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<?php
    include_once 'scriptBootstrap.php';
?>
