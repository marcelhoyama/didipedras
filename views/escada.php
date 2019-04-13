
<div class="text-center">
    <img  src="<?php BASE_URL; ?>assets/images/escadas/escada (7).jpeg"  class="img-thumbnail" style="width: 300px;"alt="Escada de pedras">
</div>
<br>
<br>



<h2 class="text-center">DIDI - Pedras: Escada de Pedras</h2>

<p><h3><b>A DIDI - Pedras disponibiliza aos seus clientes, uma grande variedade de pedras para os mais diferentes tipos de escadas de pedras.</b></h3></p>
<p>Nossos consultores são especializados e irão indicar para você o melhor tipo de pedra para sua obra. </p>
<p>

<h2> Um dos Serviços feitos</h2>
<!-- The grid: four columns -->
<div  id="desktop" class="row">
   
    <div id="slideshowExemplo" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target='#demo' data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
         
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="column">
                    <img src="<?php BASE_URL; ?>assets/images/escadas/escada (1).jpeg" alt="Escadas de pedras" onclick="myFunction(this);">
                </div>


                <div class="column">
                      <img src="<?php BASE_URL; ?>assets/images/escadas/escada (2).jpeg" alt="Escadas de pedras" onclick="myFunction(this);">
                </div>

                <div class="column">
                 <img src="<?php BASE_URL; ?>assets/images/escadas/escada (3).jpeg" alt="Escadas de pedras" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="<?php BASE_URL; ?>assets/images/escadas/escada (4).jpeg" alt="Escadas de pedras" onclick="myFunction(this);">
                </div>

            </div>

            <div class="carousel-item">
                <div class="column">
                  <img src="<?php BASE_URL; ?>assets/images/escadas/escada (5).jpeg" alt="Escadas de pedras" onclick="myFunction(this);">
                </div>


                <div class="column">
                    <img src="<?php BASE_URL; ?>assets/images/escadas/escada (6).jpeg" alt="Escadas de pedras" onclick="myFunction(this);">
                </div>

                <div class="column">
                   <img src="<?php BASE_URL; ?>assets/images/escadas/escada (7).jpeg" alt="Escadas de pedras" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="<?php BASE_URL; ?>assets/images/escadas/escada (8).jpeg" alt="Escadas de pedras" onclick="myFunction(this);">
                </div>

            </div>
            <div class="carousel-item">
                <div class="column">
                    <img src="<?php BASE_URL; ?>assets/images/escadas/escada (9).jpeg" alt="Escadas de pedras" onclick="myFunction(this);">
                </div>


                <div class="column">
                    <img src="<?php BASE_URL; ?>assets/images/escadas/escada (10).jpeg" alt="Escadas de pedras" onclick="myFunction(this);">
                </div>
                <div class="column">
                  <img src="<?php BASE_URL; ?>assets/images/escadas/escada (11).jpeg" alt="Escadas de pedras" onclick="myFunction(this);">
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
</div>
<div id="celular_display" class="row">
    <div class="carousel-inner-celular">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <?php for ($i = 1; $i <= 11; $i++) { ?>
                    <li data-target="#demo" data-slide-to="<?php echo $i; ?>"></li>
                <?php } ?>

            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid "src="<?php BASE_URL; ?>assets/images/escadas/escada (1).jpeg" alt="Escada de pedra">

                </div>
                <?php for ($i = 1; $i <= 11; $i++) { ?>

                    <div class="carousel-item">
                        <img class="img-fluid "src="<?php BASE_URL; ?>assets/images/escadas/escada (<?php echo $i; ?>).jpeg" alt="Escada de pedra">
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