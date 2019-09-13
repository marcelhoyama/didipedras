  
<title style="font-family: Blippo, fantasy;">DidiPedras - <?php echo $viewData['frase']; ?></title>
<br>
<br>
<br>
<div class="container">
    <h1 class="my-5 text-center">DidiPedras: Revestimento em pedras. </h1>
    <br>
    <div class="my-5 text-center">
        
        <figure class="figure">
            <img  src="<?php BASE_URL; ?>assets/images/revestimentos/revestimento (3).jpeg"  class="img-fluid" style="width: 500px;"alt="Revestimento">
            <figcaption class="figure-caption">Revestimento de Pedras.</figcaption>
        </figure>
        <br>
        <!-- Your share button code -->
        <div class="fb-share-button" 
             data-href="http://didipedras.com.br/revestimento" 
             data-layout="button_count">
        </div>
    </div>
    <br>


    <!-- FACEBOOK -->
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


    <br>



    

    <h3>A DidiPedras disponibiliza aos seus clientes, uma grande variedade de pedras para os mais diferentes tipos de serviços em pedras.</h3>
    <p>Nossos consultores são especializados e irão indicar para você o melhor tipo de pedra para sua obra, assim proporcionando beleza, naturalidade e facilidade de manutenção. </p>
    <p>

        Os Revestimentos em pedras para muros apresentam um efeito diferenciado pela variação de cores e texturas entre elas, além de ser muito resistente, confere requinte, sofisticação, beleza e durabilidade tornando o espaço sempre único.

        Podem ser aplicadas em muros, lareiras, churrasqueiras, fontes, colunas, fachadas, jardins, paredes de escadas e salas, bancadas, lavabos, cozinhas, painéis, áreas internas e externas em geral.

        Na DIDIPEDRAS você encontrará uma enorme variedade de Pedras de revestimento,muros moderno e baratos,muros simples e bonitos, são diversas cores, tamanhos, texturas, espessuras, pedras com acabamentos serrados, irregulares, filetados, telados, além de todos os produtos necessários para a aplicação dos mesmos e a indicação dos melhores profissionais para o assentamento.

    </p>



    <br>
    <br>
    <p>Veja também:</p>
    <li> <a href="<?php BASE_URL;?>muro">Muro de Arrimo (Pedras)</a></li>
    <li><a href="<?php BASE_URL;?>escada">Escada de pedras</a></li>
    <li><a href="<?php  BASE_URL;?>folheta">Calçamento de folheta</a></li>
    <li><a href="<?php BASE_URL; ?>paralelepipedo"> Calçamento em Paralelepipedo</a></li>
    <li> <a href="<?php BASE_URL;?>bloquete">Calçamento Intertravado ou bloquete</a></li>
    



    <h2 class="my-5 text-center"> Um dos Serviços feitos</h2>
    <!-- The grid: four col-lg-3s -->
    <div id="desktop" class="row">

        <div id="slideshowExemplo" class="carousel slide" data-ride="carousel">

            <ul class="carousel-indicators">
                <li data-target='#demo' data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <!--            <li data-target="#demo" data-slide-to="4"></li>
                        <li data-target="#demo" data-slide-to="5"></li>
                          <li data-target="#demo" data-slide-to="6"></li>
                          <li data-target="#demo" data-slide-to="7"></li>-->
            </ul>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <?php for ($i = 1; $i <= 4; $i++) { ?>
                    <div class="col-lg-3">
                        
                            <div class="materia">
                                <a href="<?php BASE_URL; ?>assets/images/revestimentos/revestimento (<?php echo $i; ?>).jpeg" data-lightbox="revestimento" data-title="Muro de Arrimo (ou Pedras)" >
                                    <img src="<?php BASE_URL; ?>assets/images/revestimentos/revestimento (<?php echo $i; ?>).jpeg" alt="Revestimento" id="imgfolheta">
                                </a>
                            </div>
                     
                    </div>

   <?php } ?>
                    </div>

                </div>

                <div class="carousel-item">
                    <div class="row">
                    <?php for ($i = 5; $i <= 8; $i++) { ?>
                    <div class="col-lg-3">
                        
                            <div class="materia">
                                <a href="<?php BASE_URL; ?>assets/images/revestimentos/revestimento (<?php echo $i; ?>).jpeg" data-lightbox="revestimento" data-title="Muro de Arrimo (ou Pedras)" >
                                    <img src="<?php BASE_URL; ?>assets/images/revestimentos/revestimento (<?php echo $i; ?>).jpeg" alt="Revestimento" id="imgfolheta">
                                </a>
                            </div>
                      
                    </div>

  <?php } ?>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="row">
                     <?php for ($i = 9; $i <= 12; $i++) { ?>
                    <div class="col-lg-3">
                       
                            <div class="materia">
                                <a href="<?php BASE_URL; ?>assets/images/revestimentos/revestimento (<?php echo $i; ?>).jpeg" data-lightbox="revestimento" data-title="Muro de Arrimo (ou Pedras)" >
                                    <img src="<?php BASE_URL; ?>assets/images/revestimentos/revestimento (<?php echo $i; ?>).jpeg" alt="Revestimento" id="imgfolheta">
                                </a>
                            </div>
                        
                    </div>

<?php } ?>
                    </div>


                </div>
                <div class="carousel-item">
                    <div class="row">
                     <?php for ($i = 13; $i <= 13; $i++) { ?>
                    <div class="col-lg-3">
                       
                            <div class="materia">
                                <a href="<?php BASE_URL; ?>assets/images/revestimentos/revestimento (<?php echo $i; ?>).jpeg" data-lightbox="revestimento" data-title="Muro de Arrimo (ou Pedras)" >
                                    <img src="<?php BASE_URL; ?>assets/images/revestimentos/revestimento (<?php echo $i; ?>).jpeg" alt="Revestimento" id="imgfolheta">
                                </a>
                            </div>
                        </div>
                    
                </div>
                    <?php } ?>
                </div>
          
           



      
    

        <a class="carousel-control-prev" href="#slideshowExemplo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slideshowExemplo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

  </div>

</div>
<div id="celular_display" class="row">
    <div class="carousel-inner-celular">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <?php for ($i = 1; $i <= 13; $i++) { ?>
                    <li data-target="#demo" data-slide-to="<?php echo $i; ?>"></li>
                <?php } ?>

            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid "src="<?php BASE_URL; ?>assets/images/revestimentos/revestimento (1).jpeg" alt="Revestimento">

                </div>
                <?php for ($i = 1; $i <= 13; $i++) { ?>

                    <div class="carousel-item">
                        <img class="img-fluid "src="<?php BASE_URL; ?>assets/images/revestimentos/revestimento (<?php echo $i; ?>).jpeg" alt="Revestimento">
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
</div>