<title style="font-family: Blippo, fantasy;">DIDI - Pedras - <?php echo $viewData['frase'];?></title>


 <br>
<br> 
<div class="text-center">
    <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (4).jpeg"  class="img-thumbnail" style="width: 300px;"alt="Matéria-prima">
</div>
<br>

<br>

<!-- FACEBOOK -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Your share button code -->
<div class="fb-share-button" 
     data-href="http://didipedras.com.br/materiaprima" 
     data-layout="button_count">
</div>


<br>

<h1 class="text-center">DIDI - Pedras: Nossa Matéria-Prima</h1>











<!-- The grid: four columns -->
<div id="desktop" class="row">





    <div id="slideshowExemplo" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target='#demo' data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
  <?php for ($i = 0; $i <= 3; $i++): ?>
                <div class="column">
                    <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i+1; ?>).jpeg" alt="Matéria-prima" onclick="myFunction(this);">
                </div>

 <?php endfor; ?>
            </div>

                                           
             <div class="carousel-item">
                  <?php for ($i ; $i <= 7; $i++): ?>
                    <div class="column">


                        <img src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i+1; ?>).jpeg" alt="Matéria-prima" onclick="myFunction(this);">
                    </div>
                      

                  <?php endfor; ?>
                     </div>
                   
            <div class="carousel-item">
                  <?php for ($i ; $i <= 11; $i++): ?>
                    <div class="column">


                        <img src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i+1; ?>).jpeg" alt="Matéria-prima" onclick="myFunction(this);">
                    </div>
                      

                  <?php endfor; ?>
                     </div>
           
<div class="carousel-item">
                  <?php for ($i ; $i <= 15; $i++): ?>
                    <div class="column">


                        <img src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i+1; ?>).jpeg" alt="Matéria-prima" onclick="myFunction(this);">
                    </div>
                      

                  <?php endfor; ?>
                     </div>

<div class="carousel-item">
                  <?php for ($i ; $i <= 19; $i++): ?>
                    <div class="column">


                        <img src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i+1; ?>).jpeg" alt="Matéria-prima" onclick="myFunction(this);">
                    </div>
                      

                  <?php endfor; ?>
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
                <?php for ($i = 1; $i <= 19; $i++) { ?>
                    <li data-target="#demo" data-slide-to="<?php echo $i; ?>"></li>
                <?php } ?>

            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid "src="<?php BASE_URL; ?>assets/images/materia-prima/materia (1).jpeg" alt="Materia-prima">

                </div>
                <?php for ($i = 1; $i <= 19; $i++) { ?>

                    <div class="carousel-item">
                        <img class="img-fluid "src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i; ?>).jpeg" alt="Materia-prima">
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
