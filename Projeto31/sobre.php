<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="styleSobre.css">
</head>
<body>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

header {
    background-color: #333;
    color: #fff;
    padding: 15px 0;
    text-align: center;
}

h1 {
    color: #555;
}

.content {
    background-color: #06f038;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(75, 228, 121, 0.438);
}

.content p {
    line-height: 1.6;
    margin-bottom: 15px;
}

footer {
    background-color: #040042;
    color: #ffffff;
    text-align: center;
    padding: 10px 0;
    margin-top: 20px;
}

footer p {
    margin: 0;
}

.left-login h1 {
    font-size: 3rem;
    font-weight: 700;
    line-height: 1.2;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
}
    </style>

    <!--Navbar-->
    <?php
        include_once 'validaNav.php';
    ?>
    <!--Fim da Navbar-->

    <header>
        <h1>Sobre a Pegasus</h1>
    </header>

    <div class="container">
        <div class="content">
            <h2>Nossa História</h2>
            <p>A Pegasus foi fundada em 2024 por dois jovens empreendedores apaixonados por esportes e movidos pelo desejo de promover um estilo de vida saudável para todos. Desde o início, a missão da empresa tem sido oferecer roupas e artigos esportivos de alta qualidade, ajudando os clientes a alcançarem seus objetivos através do esporte e de práticas saudáveis.</p>

            <h2>O que nos move</h2>
            <p>Na Pegasus, acreditamos que o esporte é uma das formas mais poderosas de transformar vidas. Seja você um atleta profissional ou alguém que busca melhorar a qualidade de vida, estamos comprometidos em fornecer os melhores produtos para que cada experiência esportiva seja a melhor possível. Nossa equipe trabalha incansavelmente para garantir que você tenha acesso aos materiais mais adequados para suas atividades.</p>

            <h2>Visão e Valores</h2>
            <p>Nossa visão é ser reconhecida como uma marca que não apenas vende produtos, mas promove mudanças positivas na vida das pessoas através da prática de esportes. Somos guiados por valores como qualidade, inovação e responsabilidade. Cada peça de roupa, calçado ou equipamento esportivo que oferecemos passa por um rigoroso processo de controle de qualidade para garantir a sua segurança e desempenho.</p>

            <h2>Nossa Missão</h2>
            <p>Impulsionada pela voracidade de proporcionar vidas mais saudáveis, a Pegasus oferece os melhores produtos esportivos para que nossos clientes possam se concentrar no que realmente importa: viver o melhor dessa vida com o esporte.</p>
        </div>
    </div>

    <?php
    include_once 'footer.php';
    ?>
</body>
</html>