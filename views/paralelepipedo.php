



<div class="text-center">
    <img  src="<?php BASE_URL; ?>assets/images/paralelepipedo_bloquete/foto (8).jpeg"  class="img-thumbnail" style="width: 300px;"alt="Palheta e arrimo">
</div>
<br>
<br>

<h2 class="text-center">DIDI - Pedras: Paralelepípedo</h2>

<p><h3><b>A DIDI - Pedras disponibiliza aos seus clientes, uma grande variedade de pedras para os mais diferentes tipos de calçamentos e construção.</b></h3></p>
<p>Nossos consultores são especializados e irão indicar para você o melhor tipo de pedra para sua obra. 
  </p>


A pedra Paralelepípedo é um tipo de material que pode ser utilizado em qualquer tipo de construção, desde residências a grandes empresas, calçamento de ruas, chácaras, pátios, revestimentos entre outros. 
Um material extremamente vantajoso pois suporta cargas pesadas, tem ótima durabilidade e resistência incontestáveis, diferente dos outros tipos de pisos oferecidos no mercado e tem um ótimo acabamento com sua beleza rústica. 
Se necessário algum tipo de reforma o cliente tem a vantagem de utilizar o mesmo material.







<h2> Um dos Serviços feitos</h2>
<!-- The grid: four columns -->
<div class="row">
    <?php
    for ($x = 0; $x > 10; $x++) {
        
    }
    ?>
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
                    <img  src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (2).jpeg" alt="Palheta" onclick="myFunction(this);">
                </div>

                <div class="column">
                    <img  src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (3).jpeg" alt="Palheta" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img  src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (4).jpeg" alt="Palheta" onclick="myFunction(this);">
                </div>

            </div>

            <div class="carousel-item">
                <div class="column">
                    <img src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (5).jpeg" alt="Palheta" onclick="myFunction(this);">
                </div>


                <div class="column">
                    <img  src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (6).jpeg" alt="Palheta" onclick="myFunction(this);">
                </div>

                <div class="column">
                    <img  src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (7).jpeg" alt="Palheta" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img  src="<?php BASE_URL; ?>assets/images/bruta_arrimo/foto (8).jpeg" alt="Palheta" onclick="myFunction(this);">
                </div>

            </div>

        </div>

        <a class="carousel-control-prev" href="#slideshowExemplo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slideshowExemplo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

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

