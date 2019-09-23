<!DOCTYPE html>
<html lang="pt-br">
    <?php $this->loadViewInTemplate_1($viewName, $viewData); ?>

    <!-- Bootstrap CSS -->
    <link href="<?php BASE_URL; ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
<link rel="stylesheet" href="<?php BASE_URL;?>assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php BASE_URL; ?>assets/css/style.css"/>
    <link rel="stylesheet" href="<?php BASE_URL; ?>assets/css/normalize.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php BASE_URL; ?>assets/css/bauhaub.ttf"/>
    <link rel="stylesheet" href="  <?php BASE_URL; ?>assets/css/lightbox.css"/>
    <body id="home">

        <!-- Navbar (sit on top) -->

        <nav class=" navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">  
                <a class="navbar-brand" href="<?php BASE_URL; ?>home" style="font-family:fontebanner; font-size: 30px; " >DIDI PEDRAS</a>

                <a class="mr-auto" target="_blank" href="https://www.facebook.com/Didi-pedras-418530741640677/"><img  src="<?php BASE_URL; ?>assets/images/facebookcolor.png" width="30" height="30" alt="facebook-DidiPedras"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="home#home" >Home<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home#projects">Produtos e Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home#about">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php BASE_URL; ?>contato">Contato</a>
                        </li>
                    </ul>
                </div>


            </div>
        </nav>



        <!--  aqui onde vai o corpo das paginas do sistema -->
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        <address>
            <div class="container">
                <!-- The Contact Section -->
                <div class="text-center" id="contact">
                    <div class="h1 mt-5">Maiores Informações</div>
                    <p class="w3-opacity w3-center"><i>Vamos entrar em contato e falar sobre o seu próximo projeto.</i></p>
                    <div class="w3-row w3-center">
                        <div class="w3-large w3-margin-bottom">
                            <i class="fa fa-map-marker" style="width:30px"></i> Rua Jordânia, nº 699 - Vilarejo - Cabreúva - SP 13315-000 <br>
                            <i  style="width:30px"></i> <a class="w3-hover-text-green" href="https://api.whatsapp.com/send?phone=5511998921840&text=Ola!%20Fiquei%20interessado%20no%20seu%20serviço!"><img src="<?php BASE_URL; ?>assets/images/whatsapp.jpg" width="25px" height="25px" >  11 9.9892-1840 vivo</a><br>
                            <i style="width:30px"></i><a class="w3-hover-text-green"href="https://api.whatsapp.com/send?phone=5511991239021&text=Ola!%20Fiquei%20interessado%20no%20seu%20serviço!"> <img src="<?php BASE_URL; ?>assets/images/whatsapp.jpg" width="25px" height="25px" >  11 9.9123-9021 claro</a><br>
                            <i style="width:30px"></i><a class="w3-hover-text-green" href="https://api.whatsapp.com/send?phone=5511997193009&text=Ola!%20Fiquei%20interessado%20no%20seu%20serviço!"> <img src="<?php BASE_URL; ?>assets/images/whatsapp.jpg" width="25px" height="25px" >  11 9.9719-3009 vivo</a><br>
                            <i class="fa fa-envelope" style="width:30px"> </i> E-mail: didi_783@hotmail.com<br>
                        </div>

                    </div>


                    <h2 class="mt-5"> Horário de funcionamento</h2>

                    <div class="">

                        <div class="">

                            <i class="" style="width:30px"> </i>Segunda á Sábado das 07:00 – 18:00<br>

                        </div>
                    </div>



                </div>
        </address>
        <!-- Image of location/map -->
        <div class="mt-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d7330.575932291688!2d-47.057451!3d-23.268984!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x94cf3b53ab0521bf%3A0x5fb2ab6e9413c629!2sDidi+pedras%2C+R.+Jord%C3%A2nia%2C+699+-+Vilarejo%2C+Cabre%C3%BAva+-+SP%2C+13315-000!3m2!1d-23.269174!2d-47.05414!5e0!3m2!1spt-BR!2sbr!4v1555088792200!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <!-- End page content -->
    </div>


    <!-- Footer -->
    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">

                <!-- Footer Location -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Localizado</h4>
                    <p class="lead mb-0">Rua Jordânia, 699
                        <br>Vilarejo, Cabreúva/SP</p>
                </div>

                <!-- Footer Social Icons -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">REDES SOCIAIS</h4>
                    <a class="btn btn-outline-light  mx-1" href="https://www.facebook.com/Didi-pedras-418530741640677/" target="_blank">
                        <i class="fab fa-fw fa-facebook-f"></i>
                    </a>

                </div>

                <!-- Footer About Text -->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Sobre</h4>
                    <p class="lead mb-0">Didi pedras a mais de 30 anos no mercado Especialista na área de pavimentação com paralelepípedos e folhetos Muros de pedra
                        .</p>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer -->
    <footer class="navbar-dark bg-dark">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            DIDI Pedras - Desenvolvido por <a target="_blank" href="http://www.radioceifeiros.com.br" title="Marcel Hoyama">PS-MACIEL</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="<?php BASE_URL; ?>assets/js/lightbox-plus-jquery.min.js"></script>
    <script src="<?php BASE_URL; ?>assets/js/jquery.mask.js"></script>
    <script src="<?php BASE_URL; ?>assets/js/jquery.validate.js"></script>
    <script src="<?php BASE_URL; ?>assets/js/messages_pt_BR.min.js"></script>
    <script src="<?php BASE_URL; ?>assets/js/validarcampos.js"></script>
    <script src="<?php BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>

