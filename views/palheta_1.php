 
<title>DIDI Pedras - Palheta</title>
<head>
        
        <meta charset="UTF=8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name= "viewport" content= "width=device-width, user-scalable=no" />

        <META NAME="Robots" CONTENT="INDEX,FOLLOW">
        <meta name="distribution" content="Global">
        <meta name="rating" content="General">
        <meta name="revisit-after" content="2">
        <meta name="classification" content="pedreira , loja de pedras, palheta de pedras, prestação de serviço">

        <meta property="og:locale" content="pt_BR">

<meta property="og:title" content="DIDI - Palheta de Pedras">
<meta property="og:description" content="Serviço de Palheta de pedras e vendas de pedras."/>
<meta property="og:url" content="http://www.didipedras.com.br/palheta_1">

<meta property="og:type" content="website">
<meta property="og:image" content="http://www.didipedras.com.br/assets/images/foto6.jpg">
<meta property="fb:admins" content="werockcontent"/>
<meta name="twitter:url" content="http://didipedras.com.br/palheta_1">
<meta property="twitter:title" content="Procurando Serviços de palheta de pedras, qualidade, vendas de pedras ... ">
<meta property="twitter:description" content="Quer ter segurança no serviço ainda oferecer o melhor atendimento,entender a sua necessidade e a partir daí apresentar o melhor negócio para o seu perfil?  Agente uma visita conosco!">
<meta property="twitter:image" content="http://www.didipedras.com.br/assets/images/foto6.jpg">
<meta property="og:image:type" content="image/jpeg" />

        <meta google-site-verification: googlece4af351182f445f.html/>


       
    </head>
<br>
<br>
<br>


<img class="sticky" src="<?php BASE_URL; ?>assets/images/foto6.jpg" alt="Palheta">
<h2>Pedras Palheta e arrimo</h2>

<p><b>A DIDI - Pedras disponibiliza aos seus clientes, uma grande variedade de pedras para os mais diferentes tipos de calçamentos e construção.</b></p>
<p>Nossos consultores são especializados e irão indicar para você o melhor tipo de pedra para sua obra. 
    A Folheta é Indicado para calçamento de residências, chácaras, rampas, rodeiros, muros, acabamentos de muros e revestimentos entre outros. 
    A Folheta é um tipo de pedra que tem um ótimo acabamento e grande beleza, devido suas dimensões, pode ser utilizado em construções de diversos portes, é muito resistente e não se deteriora com o tempo.
</p>










<h2> Um dos Serviços feitos</h2>
<!-- The grid: four columns -->
<div class="row">
    
    
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ol>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (7).jpeg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (8).jpeg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (9).jpeg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
    <?php
    for ($x = 0; $x > 10; $x++) {
        
    }
    ?>
<!--    
    <div id="slideshowExemplo" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target='#demo' data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="column">
                <img src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (1).jpeg" alt="Palheta" onclick="myFunction(this);">
            </div>
               <div class="column">
                <img  src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (4).jpeg" alt="Palheta" onclick="myFunction(this);">
            </div>
</div> 
          <div class="carousel-item">
            <div class="column">
                <img  src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (3).jpeg" alt="Palheta" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img  src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (4).jpeg" alt="Palheta" onclick="myFunction(this);">
            </div>
          </div>
            
            <div class="carousel-item">
            <div class="column">
                <img  src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (3).jpeg" alt="Palheta" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img  src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (4).jpeg" alt="Palheta" onclick="myFunction(this);">
            </div>
          </div>

        </div>

        Left and right controls 
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
    </div>-->

</div>

<!-- The expanding image container -->
<div class="container">
    <!-- Close the image -->
    <span onclick="this.parentElement.style.display = 'none'" class="closebtn">&times;</span>

    <!-- Expanded image -->
    <img id="expandedImg" style="width:100%">

    <!-- Image text -->
    <div id="imgtext"></div>
</div>

<script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>