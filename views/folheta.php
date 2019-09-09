<title style="font-family: Blippo, fantasy;">DIDI - Pedras - <?php echo $viewData['frase']; ?></title>

<br>
<br>
<br>
<div class="container">
    <div class="my-5 text-center">
        <figure class="figure">
            <img  src="<?php BASE_URL; ?>assets/images/folhetas/folheta (1).jpeg"  class="figure-img img-fluid rounded" alt="Calçamento de folheta"style="width: 500px;">
            <figcaption class="figure-caption">Calçamento de folheta. ©DidiPedras</figcaption>
        </figure>
        <br>
        <div class=" fb-share-button " 
             data-href="http://didipedras.com.br/folheta" 
             data-layout="button_count">
        </div>
    </div>
    <!-- FACEBOOK -->

    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!-- Your share button code -->





    <h1 class="text-center">DidiPedras: Calçamento de Folheta</h1>

    <h3>A DidiPedras disponibiliza aos seus clientes, uma grande variedade de pedras para os mais diferentes tipos de calçamentos e construção.</h3>
    <p class="my-5">Nossos consultores são especializados e irão indicar para você o melhor tipo de pedra para sua obra. </p>
    <p> A Folheta é um tipo de pedra que tem um ótimo acabamento e grande beleza, devido suas dimensões, pode ser utilizado em construções de diversos portes, é muito resistente e não se deteriora com o tempo.
    </p>
    <p>
        Seu corte é manual, podendo também ter outros formatos caso o cliente desejar. 

        Usada como: pedra folheta para caminho no jardim, escadas, entradas de veículos, calçamentos (folheta para calçada), garagens, fachadas, revestimentos, fonte e entre outras infinidades.
    </p>
    <p>
        Peso e resistência: A pedra folheta pesa de 25 a 28 kg a unidade. É uma pedra muito resistente suportando passagens de veículo.

        Permite um assentamento com excelente acabamento. Ótima tanto para uso com rejunte de massa ou assentamento direto na terra, porém a colocação tem que ser muito bem assentada pelo colocador. 
        Temos os melhores assentadores, todos qualificados e treinados.

    </p>



    <a href="<?php BASE_URL; ?>paralelepipedo">Veja também Calçamento de Paralelepipedo</a>






    <h2 class="text-center my-5"> Um dos Serviços feitos</h2>
    <!-- The grid: four col-lg-3s -->
    <div  class="row" id="desktop">

        <div id="slideshowExemplo" class="carousel slide" data-ride="carousel">

            <ul class="carousel-indicators">
                <li data-target='#demo' data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
                <li data-target="#demo" data-slide-to="5"></li>
                <li data-target="#demo" data-slide-to="6"></li>
                <li data-target="#demo" data-slide-to="7"></li>
                <li data-target="#demo" data-slide-to="8"></li>
                <li data-target="#demo" data-slide-to="9"></li>

            </ul>
            <div class="row">
                <div class="col-lg-12">
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="row">
                                <?php for ($i = 1; $i <= 4; $i++) {
                                    ?>
                                    <div class="col-lg-3">
                                        <div class="materia">
                                            <a href="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" data-lightbox="folheta" data-title="Folheta" >
                                                <img class="img-fluid " src="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" id="imgfolheta" alt="folheta" >
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>


                            </div>

                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <?php for ($i = 5; $i <= 8; $i++) {
                                    ?>
                                    <div class="col-lg-3">
                                        <div class="materia">
                                            <a href="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" data-lightbox="folheta" data-title="Folheta">
                                                <img src="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" alt="Folheta" id="imgfolheta" ></a>
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
                                            <a href="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" data-lightbox="folheta" data-title="Folheta">

                                                <img src="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" alt="Folheta" id="imgfolheta">
                                            </a>
                                        </div>

                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <?php for ($i = 13; $i <= 16; $i++) { ?>
                                    <div class="col-lg-3">
                                        <div class="materia">
                                            <a href="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" data-lightbox="folheta" data-title="Folheta">

                                                <img src="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" alt="Folheta" id="imgfolheta">
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <?php for ($i = 17; $i <= 20; $i++) { ?>
                                    <div class="col-lg-3">
                                        <div class="materia">
                                            <a href="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" data-lightbox="folheta" data-title="Folheta">

                                                <img src="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" alt="Folheta" id="imgfolheta">

                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>


                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <?php for ($i = 21; $i <= 24; $i++) { ?>
                                    <div class="col-lg-3">
                                        <div class="materia">
                                            <a href="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" data-lightbox="folheta" data-title="Folheta">

                                                <img src="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" alt="Folheta" id="imgfolheta">

                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <?php for ($i = 25; $i <= 28; $i++) { ?>
                                    <div class="col-lg-3">
                                        <div class="materia">
                                            <a href="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" data-lightbox="folheta" data-title="Folheta">

                                                <img src="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" alt="Folheta" id="imgfolheta">

                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <?php for ($i = 29; $i <= 32; $i++) { ?>
                                    <div class="col-lg-3">
                                        <div class="materia">
                                            <a href="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" data-lightbox="folheta" data-title="Folheta">

                                                <img src="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" alt="Folheta" id="imgfolheta">

                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>

                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <?php for ($i = 33; $i <= 36; $i++) { ?>
                                    <div class="col-lg-3">
                                        <div class="materia">
                                            <a href="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" data-lightbox="folheta" data-title="Folheta">

                                                <img src="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" alt="Folheta" id="imgfolheta">

                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <?php for ($i = 37; $i <= 38; $i++) { ?>
                                    <div class="col-lg-3">
                                        <div class="materia">
                                            <a href="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" data-lightbox="folheta" data-title="Folheta">

                                                <img src="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" alt="Folheta" id="imgfolheta">

                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>

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





    </div>

    <div id="celular_display" class="row">
        <div class="carousel-inner-celular">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <?php for ($i = 1; $i <= 35; $i++) { ?>
                        <li data-target="#demo" data-slide-to="<?php echo $i; ?>"></li>
                    <?php } ?>

                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid "src="<?php BASE_URL; ?>assets/images/folhetas/folheta (1).jpeg" alt="Folheta">

                    </div>
                    <?php for ($i = 1; $i <= 35; $i++) { ?>

                        <div class="carousel-item">
                            <img class="img-fluid "src="<?php BASE_URL; ?>assets/images/folhetas/folheta (<?php echo $i; ?>).jpeg" alt="Folheta">
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
<!--Modal-->
<div class="modal" id="img-folheta" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Título do modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <img class="img-fluid " src="<?php BASE_URL; ?>assets/images/folhetas/folheta (1).jpeg">
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

            </div>
        </div>
    </div>
</div>