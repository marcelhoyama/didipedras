<title style="font-family: Blippo, fantasy;">DIDI - Pedras - <?php echo $viewData['frase'];?></title>


  

<div class="text-center">
    <img  src="<?php BASE_URL; ?>assets/images/bloquete/bloquete (1).jpeg"  class="img-thumbnail" style="width: 300px;"alt="Paralelepipedo">
</div>
<br>
<br>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Your share button code -->
<div class="fb-share-button" 
     data-href="http://www.didipedras.com.br/bloquete" 
     data-layout="button_count">
</div>
<h2 class="text-center">DIDI - Pedras: Intertravado ou Bloquete</h2>

<p><h3><b>A DIDI - Pedras disponibiliza aos seus clientes, uma grande variedade de pedras para os mais diferentes tipos de calçamentos e construção.</b></h3></p>
<p>Nossos consultores são especializados e irão indicar para você o melhor tipo de pedra para sua obra. 
</p>

<p><h3>Intertravado ou Bloquete</h3></p>
<p>O principio básico do intertravamento é a junção das peças modulares de concreto que se encaixam/travam umas às outras, revestindo assim a superfície. Pode ser assentada a mão ou mecanicamente, o que torna o trabalho mais fácil especialmente em grandes áreas como portos, aeroporto, entrepostos e etc.</p>

<p><h4>Principais Aplicações</h4></p>
<p>A versatilidade de aplicação é certamente a maior vantagem desse pavimento em relação a outros. Pode ser colocado em áreas que exijam uma maior resistência por haver trafego de veículos pesados, além de locais com trânsito leve onde geralmente a estética dita às regras, favorecendo o uso de pisos intertravados coloridos.</p>

<p><h4>Manutenção</h4></p>
A manutenção e limpeza do pavimento intertravado é feita de maneira simples. Pode ser realizada através de jato de água com pressão e por meio de produtos químicos. Sua resistência torna o processo seguro, evitando qualquer tipo de deterioração na hora da limpeza. A substituição de peças também pode ser feita de forma rápida e prática. Pelo fato do intertravado não ser fixo por concreto ou argamassa, a peça avariada pode facilmente ser trocada por uma nova utilizando do principio básico do intertravamento.</p>

<p> <h4>Fator Estético</h4></p>


<p>Com o avanço na tecnologia de produção, as peças começaram ganhar maior apelo estético. A tecnologia de dupla camada tornou o acabamento superior, acrescentando vivacidade às cores. A estética lapidada incorporou-se ao status de versatilidade do produto, agradando arquitetos e paisagistas que veem o pavimento intertravado como mais um elemento de criação para seus projetos.</p>

<p> <h4>Durabilidade</h4></p>
<p>Por ser um produto feito de concreto, se corretamente instalado e respeitada às condições de solo indicadas para a execução do serviço, o intertravado pode ter durabilidade indefinida. Para os pisos coloridos que possuem a tecnologia da dupla camada a durabilidade das cores também aumenta drasticamente, por serem utilizados materiais nobres na camada superior o impacto do desgaste natural é muito menor, prolongando a vivacidade das cores.</p>

<p><h4>Conforto Térmico</h4></p>
<p>A coloração mais clara e homogênea dos pisos intertravados em relação a outros tipos de pavimentos, garante uma menor absorção do calor pela superfície, aumentando o conforto térmico e diminuindo a formação das ilhas de calor. A diferença de temperatura em relação a outros tipos de pavimentos pode chega a 17° C.</p>

<p><h4>Permeabilidade</h4></p>


<p>O pavimento intertravado de concreto pode ser permeável. A característica drenante permite a infiltração da água no piso, colaborando com a diminuição das superfícies impermeáveis tão comuns em ambientes urbanos. Mesmo os intertravados que não são produzidos para possuírem a característica drenante têm o seu percentual de permeabilidade.</p>





<h2 class="text-center"> Um dos Serviços feitos</h2>
<!-- The grid: four columns -->
<div id="desktop" class="row">
    <?php
    for ($x = 0; $x > 3; $x++) {
        
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
                        <img src="<?php BASE_URL; ?>assets/images/bloquete/bloquete (1).jpeg"  alt="intertravado" onclick="myFunction(this);">
                    </div>

                    <div class="column">
                        <img  src="<?php BASE_URL; ?>assets/images/bloquete/bloquete (2).jpeg" alt="Intertravado" onclick="myFunction(this);">
                    </div>

                    <div class="column">
                        <img  src="<?php BASE_URL; ?>assets/images/bloquete/bloquete (3).jpeg"  alt="intertravado" onclick="myFunction(this);">
                    </div>
                  

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
                <?php for ($i = 1; $i <= 1; $i++) { ?>
                    <li data-target="#demo" data-slide-to="<?php echo $i; ?>"></li>
                <?php } ?>

            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid "src="<?php BASE_URL; ?>assets/images/bloquete/bloquete (1).jpeg" alt="Intertravado">

                </div>
                <?php for ($i = 1; $i <= 3; $i++) { ?>

                    <div class="carousel-item">
                        <img class="img-fluid "src="<?php BASE_URL; ?>assets/images/bloquete/bloquete (<?php echo $i; ?>).jpeg" alt="Intertravado">
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
