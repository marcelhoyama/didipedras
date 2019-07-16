<title>DIDI Pedras - Matéria-prima</title>  
<head>
        
        <meta charset="UTF=8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name= "viewport" content= "width=device-width, user-scalable=no" />

        <META NAME="Robots" CONTENT="INDEX,FOLLOW">
        <meta name="distribution" content="Global">
        <meta name="rating" content="General">
        <meta name="revisit-after" content="2">
        <meta name="classification" content="pedreira , loja de pedras, materia prima de pedras, prestação de serviço">

        <meta property="og:locale" content="pt_BR">

<meta property="og:title" content="DIDI - Matéria-prima de Pedras">
<meta property="og:description" content="Matéria-prima de pedras e vendas de pedras."/>
<meta property="og:url" content="http://www.didipedras.com.br/materiaprima">

<meta property="og:type" content="website">
<meta property="og:image" content="http://www.didipedras.com.br/assets/images/materia-prima/materia (4).jpeg">
<meta property="fb:admins" content="werockcontent"/>
<meta name="twitter:url" content="http://didipedras.com.br/materiaprima">
<meta property="twitter:title" content="Procurando Materia-prima de pedras, qualidade, vendas de pedras ... ">
<meta property="twitter:description" content="Quer ter segurança no serviço ainda oferecer o melhor atendimento,entender a sua necessidade e a partir daí apresentar o melhor negócio para o seu perfil?  Agente uma visita conosco!">
<meta property="twitter:image" content="http://www.didipedras.com.br/assets/images/materia-prima/materia (4).jpeg">
<meta property="og:image:type" content="image/jpeg" />

        <meta google-site-verification: googlece4af351182f445f.html/>


 </head>

<div class="text-center">
    <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (4).jpeg"  class="img-thumbnail" style="width: 300px;"alt="Matéria-prima">
</div>
<br>
<br>

<h2 class="text-center">DIDI - Pedras: Nossa Matéria-Prima</h2>











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
