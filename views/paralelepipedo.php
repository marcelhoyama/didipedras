



<div class="text-center">
    <img  src="<?php BASE_URL; ?>assets/images/paralelepipedo/paralelepipedo  (1).jpeg"  class="img-thumbnail" style="width: 300px;"alt="Paralelepipedo">
</div>
<br>
<br>

<h2 class="text-center">DIDI - Pedras: Calçamento de Paralelepípedo</h2>

<p><h3><b>A DIDI - Pedras disponibiliza aos seus clientes, uma grande variedade de pedras para os mais diferentes tipos de calçamentos e construção.</b></h3></p>
<p>Nossos consultores são especializados e irão indicar para você o melhor tipo de pedra para sua obra. 
  </p>


A pedra Paralelepípedo é um tipo de material que pode ser utilizado em qualquer tipo de construção, desde residências a grandes empresas, calçamento de ruas, chácaras, pátios, revestimentos, calçamento entre outros. 
Um material extremamente vantajoso pois suporta cargas pesadas, tem ótima durabilidade e resistência incontestáveis, diferente dos outros tipos de pisos oferecidos no mercado e tem um ótimo acabamento com sua beleza rústica. 
Se necessário algum tipo de reforma o cliente tem a vantagem de utilizar o mesmo material (as suas pedras paralelepípedo usado).







<h2> Um dos Serviços feitos</h2>
<!-- The grid: four columns -->
<div id="desktop" class="row">
    <?php
    for ($x = 0; $x > 7; $x++) {
        
    }
    ?>
    <div id="slideshowExemplo" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target='#demo' data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
<!--            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>-->
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="column">
                    <img src="<?php BASE_URL; ?>assets/images/paralelepipedo/paralelepipedo  (1).jpeg"  alt="Paralelepipedo" onclick="myFunction(this);">
                </div>

                <div class="column">
                    <img  src="<?php BASE_URL; ?>assets/images/paralelepipedo/paralelepipedo  (2).jpeg" alt="Paralelepipedo" onclick="myFunction(this);">
                </div>

                <div class="column">
                    <img  src="<?php BASE_URL; ?>assets/images/paralelepipedo/paralelepipedo  (3).jpeg"  alt="Paralelepipedo" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img  src="<?php BASE_URL; ?>assets/images/paralelepipedo/paralelepipedo  (4).jpeg"  alt="Paralelepipedo" onclick="myFunction(this);">
                </div>

            </div>

            <div class="carousel-item">
                <div class="column">
                    <img src="<?php BASE_URL; ?>assets/images/paralelepipedo/paralelepipedo  (5).jpeg"  alt="Paralelepipedo" onclick="myFunction(this);">
                </div>


                <div class="column">
                    <img  src="<?php BASE_URL; ?>assets/images/paralelepipedo/paralelepipedo  (6).jpeg"  alt="Paralelepipedo" onclick="myFunction(this);">
                </div>

                <div class="column">
                    <img  src="<?php BASE_URL; ?>assets/images/paralelepipedo/paralelepipedo  (7).jpeg"  alt="Paralelepipedo" onclick="myFunction(this);">
                </div>
               

            </div>

<!--              <div class="carousel-item">
                <div class="column">
                    <img src="<?php BASE_URL; ?>assets/images/paralelepipedo/paralelepipedo (9).jpeg"  alt="Paralelepipedo" onclick="myFunction(this);">
                </div>


                <div class="column">
                    <img  src="<?php BASE_URL; ?>assets/images/paralelepipedo/paralelepipedo (10).jpeg"  alt="Paralelepipedo" onclick="myFunction(this);">
                </div>-->

              

            </div>
        </div>

        <a class="carousel-control-prev" href="#slideshowExemplo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slideshowExemplo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
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
</div>

<div id="celular_display" class="row">
    <div class="carousel-inner-celular">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <li data-target="#demo" data-slide-to="<?php echo $i; ?>"></li>
                <?php } ?>

            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid "src="<?php BASE_URL; ?>assets/images/paralelepipedo/paralelepipedo  (1).jpeg" alt="Paralelepipedo">

                </div>
                <?php for ($i = 1; $i <= 7; $i++) { ?>

                    <div class="carousel-item">
                        <img class="img-fluid "src="<?php BASE_URL; ?>assets/images/paralelepipedo/paralelepipedo  (<?php echo $i; ?>).jpeg" alt="Paralelepipedo">
                    </div>

                <?php } ?>


            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>

    </div>
</div>
