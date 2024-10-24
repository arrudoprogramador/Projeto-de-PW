<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegassus - Loja de Artigos Esportivos</title>
</head>

<body>

<style>

/* corpo */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    width: 100vw;
    height: 100vh;
}

.conteiner_site {
    margin: 0px 150px 20px;
}



/* Nav-BAr */
.Nav {
    background-color: #16B83E;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 10px;
}

.conteiner_link {
    display: flex;
}

.logo {
    width: 200px;
    height: 50px;
    border-radius: 19px;
}

.logo_nav {
    display: flex;
    align-items: center;
}

.nav_links {
    display: flex;
    list-style: none;
}

.links {
    padding: 15px;
    color: #fff;
    text-decoration: none;
    font-size: 19px;
    font-weight: 700;
}

.links:hover {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
}

.Entrar {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    color: #fff;
    text-decoration: none;
    background-color: transparent;
}

.Entrar:hover {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
}



/* Carrousel */
.carousel-item {
    margin: 30px;
}




/* Cards */
.conteiner_cards{
display: flex;
justify-content: space-between;
margin: 5px;


}
.card{
  margin: 25px;
 
}


.cards{
position: relative;
background:  #122936;
border-radius: 20px;
overflow: hidden;
width: 30%;
height: auto;
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);


}

.cards:hover {
    transform: scale(1.03);
    box-shadow: 0 7px 20px rgba(0, 0, 0, 0.5);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}





.card-titulo{
  font-size: 16px;
  font-weight: 400;

}


.img_card1{
  width: 100%;
  height: 550px;
  
}



</style>






<div class="conteiner_site">
<!--Nav-->
    <header>
        <nav class="Nav">
            <?php include_once 'validaNav.php'; ?>
        </nav>
    </header>
<!--Fim do Nav-->





    <!-- Carrossel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/carousel1.png" class="d-block w-100" alt="Imagem 1">
            </div>
            <div class="carousel-item">
                <img src="./img/carousel3.png" class="d-block w-100" alt="Imagem 2">
            </div>
            <div class="carousel-item">
                <img src="./img/foto.png" class="d-block w-100" alt="Imagem 3">
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
    <!--FIm do Carrosel-->





    <!--Cards poster-->


    <div class="conteiner_cards">
    
    
    <div class="cards" >
    <img  class="img_card1"   src="./img/20.png" alt="">


    </div>


    <div class="cards">
    <img  class="img_card1"   src="./img/20.png" alt="">


    </div>
    
    <div class="cards">
    <img  class="img_card1"   src="./img/20.png" alt="">


    </div>
    </div>





    
    <!--Cards -->

    <div class="conteiner_cards">

    <div class="card" style="width: 18rem;">
        <img src="./img/adidas.png" class="card-img-top" alt="...">

      <div class="card-body">
        <p class="card-titulo">Tênis adidas Grand Court 2.0 - Masculino</p>
      </div>

       <div class="Preco">
        <div>
         <p> $399,00</p>
         <h6> $299,00 <p>no pix</p></h6>

        </div>



       </div>

      <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>

<div class="card" style="width: 18rem;">
  <img src="./img/adidas.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="./img/adidas.png"class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="./img/adidas.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

</div>
 

    <?php
    include_once 'scriptBootstrap.php';
    include_once 'footer.php';
    ?>



</div>

</body>
</html>
