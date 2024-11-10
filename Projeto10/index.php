<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pegasus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <?php include_once 'componentes/scriptBootstrap.php'; ?>
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
      border-radius: 10px;
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
</head>

<body>

  <?php include_once 'componentes/validaNav.php'; ?>

  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carousel1.png" class="d-block w-100" alt="Description for first slide">
      </div>
      <div class="carousel-item">
        <img src="img/foto.png" class="d-block w-100" alt="Description for second slide">
      </div>
      <div class="carousel-item">
        <img src="img/carousel3.png" class="d-block w-100" alt="Description for third slide">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Categoria Section -->
  <h2 class="text-center">Busque por categoria:</h2>
  <div class="container row mx-auto g-4">
    <?php for ($i = 0; $i < 6; $i++): ?>
      <div class="col-6 col-md-4 col-xxl-2">
        <div class="card">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96"></rect>
            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
          </svg>
          <div class="card-header">
            <p class="text-center">Categoria</p>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>

  <!-- Produtos Section -->
  <h2 class="text-center">Produtos que estão bombando!</h2>
  <div class="container row mx-auto g-4">
    <?php for ($i = 0; $i < 6; $i++): ?>
      <div class="col-12 col-md-6 col-xxl-4">
        <div class="card">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96"></rect>
            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
          </svg>
          <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p>R$300,00</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>

  <!-- Facilidades Section -->
  <section class="pb-4">
    <h2 class="text-center">Conheça todas as nossas facilidades</h2>
    <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3 px-3 m-5">
      <div class="divs-facilidades d-flex align-items-center">
        <div><i class="bi bi-x-diamond fs-1"></i></div>
        <div>
          <div class="ms-3 mb-1">PAGUE PELO PIX</div>
          <div class="texto-menor ms-3">Ganhe 5% OFF em pagamentos via PIX</div>
        </div>
      </div>
      <div class="divs-facilidades d-flex align-items-center">
        <div><i class="bi bi-arrow-repeat fs-1"></i></div>
        <div>
          <div class="ms-3 mb-1">TROCA GRÁTIS</div>
          <div class="texto-menor ms-3">Fique livre para trocar em até 30 dias.</div>
        </div>
      </div>
      <div class="divs-facilidades d-flex align-items-center">
        <div><i class="bi bi-flower1 fs-1"></i></div>
        <div>
          <div class="ms-3 mb-1">SUSTENTABILIDADE</div>
          <div class="texto-menor ms-3">Moda responsável, que respeita o meio ambiente.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer and Scripts -->
  <?php include_once 'componentes/footer.php'; ?>
  <?php include_once 'componentes/scriptBootstrap.php'; ?>
  
</body>
</html>
