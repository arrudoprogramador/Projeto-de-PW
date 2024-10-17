<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!--Navbar Sem cadastro-->

<style>
.navbar1 {
    background-color: #003366; 
    padding: 10px;
}

.navbar1 .navbar-brand {
    color: #ffffff;
    font-weight: bold;
    font-size: 1.5rem;
}

.navbar1 .navbar-toggler {
    border-color: #ffffff;
}

.navbar1 .navbar-toggler-icon {
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath stroke="rgba%2855,255,255,1%29" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
}

.navbar1 .nav-link {
    color: #000000;
}

.navbar1 .nav-link:hover {
    color: #32cd32; 
}

.offcanvas-header, .offcanvas-title {
    color: #003366;
}

.btn-close {
    background-color: #003366;
}

.offcanvas-body {
    background-color: #f5f5f5; 
}

.nav-item .nav-link.active {
    color: #32cd32; 
    font-weight: bold;
}

    </style>

    <nav class="navbar navbar1 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pegassus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Pegassus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastro.php">Cadastro</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
