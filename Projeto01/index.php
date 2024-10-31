<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meteora</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
  body {
      padding-top: 70px; 
  }

  .navbar {
      padding: 20px 0; 
  }

  .search1 {
      width: 550px;
      margin: 0px 17px;
      border-radius:10px;
  }

  .search1 input {
      height: 60px; 
  }
  .nav-link {
  font-weight: bold; 
  transition: color 0.3s ease, transform 0.3s ease;
}

.nav-link:hover {
  color: green; 
}
  </style>


<body>

  <!--Nav-->
  <nav class="navbar navbar-expand-xl	 bg-body-tertiary fixed-top">
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
        </div>
      </div>
    </div>
  </nav>



  <!--Carro-->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
          xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide"
          preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First
            slide</text>
        </svg>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
          xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide"
          preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second
            slide</text>
        </svg>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
          xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide"
          preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third
            slide</text>
        </svg>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <h2 class="text-center"> Busque por categoria:</h2>

  <!--Card-->
  <div class="container row mx-auto g-4">

 <div class="col-6 col-md-4 col-xxl-2">
    <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg"
        role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">

        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#868e96">
        </rect>
        <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
      </svg>

      <div class="card-header">
        <p class="text-center">Categoria</p>
      </div>
    </div>
</div>

 <div class="col-6 col-md-4 col-xxl-2">
  <div class="card">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img"
      aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">

      <title>Placeholder</title>
      <rect width="100%" height="100%" fill="#868e96">
      </rect>
      <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
    </svg>

    <div class="card-header">
      <p class="text-center">Categoria</p>
    </div>
  </div>
</div>


 <div class="col-6 col-md-4 col-xxl-2">
  <div class="card">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img"
      aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">

      <title>Placeholder</title>
      <rect width="100%" height="100%" fill="#868e96">
      </rect>
      <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
    </svg>

    <div class="card-header">
      <p class="text-center">Categoria</p>
    </div>
  </div>
</div>

 <div class="col-6 col-md-4 col-xxl-2">
  <div class="card">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img"
      aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">

      <title>Placeholder</title>
      <rect width="100%" height="100%" fill="#868e96">
      </rect>
      <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
    </svg>

    <div class="card-header">
      <p class="text-center">Categoria</p>
    </div>
  </div>
</div>

 <div class="col-6 col-md-4 col-xxl-2">
  <div class="card">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img"
      aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">

      <title>Placeholder</title>
      <rect width="100%" height="100%" fill="#868e96">
      </rect>
      <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
    </svg>

    <div class="card-header">
      <p class="text-center">Categoria</p>
    </div>
  </div>
</div>


 <di class="col-6 col-md-4 col-xxl-2">


  <div class="card">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img"
      aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">

      <title>Placeholder</title>
      <rect width="100%" height="100%" fill="#868e96">
      </rect>
      <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
    </svg>
    <div class="card-header">
      <p class="text-center">Categoria</p>
    </div>


  </div>
</div>  
</div>
  








  <h2 class="text-center"> Produtos que estão bombando!</h2>

  
  
  <div class="container row mx-auto g-4">




<div class=" col-12 col-md-6 col-xxl-4">

    <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg"
        role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image
          cap</text>
      </svg>
      <div class="card-body">
        <h5 class="card-title">Produto</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <p>R$300,00</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div>

<div class=" col-12 col-md-6 col-xxl-4">

    <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg"
        role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image
          cap</text>
      </svg>
      <div class="card-body">
        <h5 class="card-title">Produto</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <p>R$300,00</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div>

<div class=" col-12 col-md-6 col-xxl-4">

    <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg"
        role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image
          cap</text>
      </svg>
      <div class="card-body">
        <h5 class="card-title">Produto</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <p>R$300,00</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div>

<div class=" col-12 col-md-6 col-xxl-4">

    <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg"
        role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image
          cap</text>
      </svg>
      <div class="card-body">
        <h5 class="card-title">Produto</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <p>R$300,00</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div>
    


<div class=" col-12 col-md-6 col-xxl-4">

    <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg"
        role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image
          cap</text>
      </svg>
      <div class="card-body">
        <h5 class="card-title">Produto</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <p>R$300,00</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div>

<div class=" col-12 col-md-6 col-xxl-4">

    <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg"
        role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image
          cap</text>
      </svg>
      <div class="card-body">
        <h5 class="card-title">Produto</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <p>R$300,00</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div</div>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <?php
    
    include_once 'footer.php';
    ?>
</body>

</html>