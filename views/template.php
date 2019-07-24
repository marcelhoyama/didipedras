<!DOCTYPE html>
<html lang="pt-br">
   
    <?php $this->loadViewInTemplate_1($viewName, $viewData); ?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="<?php BASE_URL; ?>assets/css/w3.css"/>
    <link rel="stylesheet" href="<?php BASE_URL; ?>assets/css/style.css"/>
    <link rel="stylesheet" href="<?php BASE_URL; ?>assets/css/normalize.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>

        <!-- Navbar (sit on top) -->


        <div class="w3-top">
            <div class="w3-bar w3-white w3-card w3-wide w3-large">
                <a href="https://www.facebook.com/Didi-pedras-418530741640677/" class="w3-bar-item "><img class="w3-hover-shadow" src="<?php BASE_URL; ?>assets/images/facebookcolor.png" width="40" height="40" style="margin-top: -7px"/></a>

                <a href="<?php BASE_URL; ?>home" class="w3-bar-item" ><img id="logo-nav" class="w3-hover-shadow"src="<?php BASE_URL; ?>assets/images/didipedras.jpg" width="155px" height="auto"></a>


                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-white" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <div class="w3-right w3-hide-small">
                    <a href="home#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
                    <a href="<?php BASE_URL; ?>home#projects" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">Produtos e Serviços</a>
                    <a href="<?php BASE_URL; ?>home#about" class="w3-bar-item w3-button w3-hide-small w3-padding-large">Sobre</a>
                    <a href="<?php BASE_URL; ?>contato" class="w3-bar-item w3-button w3-hide-small w3-padding-large">Contato</a>
                </div>
            </div>
            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="home#" class="w3-bar-item w3-button w3-padding-large">Home</a>
                <a href="<?php BASE_URL; ?>home#projects" class="w3-bar-item w3-button w3-padding-large">Produtos e Serviços</a>
                <a href="<?php BASE_URL; ?>home#about" class="w3-bar-item w3-button w3-padding-large">Sobre</a>
                <a href="<?php BASE_URL; ?>contato"  class="w3-bar-item w3-button w3-padding-large">Contato</a>
            </div>
        </div>

 <div class="container-fluid">
     <br>
     
        <!--  aqui onde vai o corpo das paginas do sistema -->
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
 </div>
        <div class="">
            <br>
            <h2 class="w3-wide w3-center">Maiores Informações</h2>
            <h3 class="w3-opacity w3-center"><i>Vamos entrar em contato e falar sobre o seu próximo projeto.</i></h3>

            <!-- The Contact Section -->
            <div class="row">

                <div class="col w3-center">

                    <div class="w3-large w3-margin-bottom">
                        <i class="fa fa-map-marker" style="width:30px"></i> Rua Jordânia 699 Vilarejo - Cabreúva - SP 13315-000 <br>
                        <i  style="width:30px"></i> <a class="w3-hover-text-green" href="https://api.whatsapp.com/send?phone=5511998921840&text=Ola!%20Fiquei%20interessado%20no%20seu%20serviço!"><img src="<?php BASE_URL; ?>assets/images/whatsapp.jpg" width="25px" height="25px" >  11 9.9892-1840 vivo</a><br>
                        <i style="width:30px"></i><a class="w3-hover-text-green"href="https://api.whatsapp.com/send?phone=5511991239021&text=Ola!%20Fiquei%20interessado%20no%20seu%20serviço!"> <img src="<?php BASE_URL; ?>assets/images/whatsapp.jpg" width="25px" height="25px" >  11 9.9123-9021 claro</a><br>
                        <i style="width:30px"></i><a class="w3-hover-text-green" href="https://api.whatsapp.com/send?phone=5511997193009&text=Ola!%20Fiquei%20interessado%20no%20seu%20serviço!"> <img src="<?php BASE_URL; ?>assets/images/whatsapp.jpg" width="25px" height="25px" >  11 9.9719-3009 vivo</a><br>
                        <i class="fa fa-envelope" style="width:30px"> </i> E-mail: didi_783@hotmail.com<br>
                        <br>
                        <div class="fb-page" 
                             data-tabs="timeline"
                             data-href="https://www.facebook.com/Didi-pedras-418530741640677/"
                             data-width="380"></div>

                    </div>

                </div>




                <div class="col w3-center">
                    <div class="w3-large w3-margin-bottom" style="max-width:800px" id="contact">
                        <h4 class="w3-wide w3-center"> Horário de funcionamento</h4>

                        <div class="w3-row w3-padding-22">

                            <div class="w3-center">

                                <i class="" style="width:30px"> </i>Segunda á Sábado das 07:00 – 18:00<br>

                            </div>
                        </div>

                    </div>
                    <div class="w3-content w3-padding" style="max-width:1564px">

                        <br>
                        <br>
                        <br>

                        <!-- Image of location/map -->
                        <div class="w3-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1832.6435050975426!2d-47.05510559867593!3d-23.269018749981203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf3b53ab0521bf%3A0x5fb2ab6e9413c629!2sDidi+pedras!5e0!3m2!1spt-BR!2sbr!4v1563985932634!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                        <!-- End page content -->
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="<?php BASE_URL; ?>assets/js/jquery.mask.js"></script>
            <script src="<?php BASE_URL; ?>assets/js/jquery.validate.js"></script>
            <script src="<?php BASE_URL; ?>assets/js/messages_pt_BR.min.js"></script>
            <script src="<?php BASE_URL; ?>assets/js/validarcampos.js"></script>
            <script src="<?php BASE_URL; ?>assets/js/script.js"></script>
            <script>
                    // Used to toggle the menu on small screens when clicking on the menu button
                    function myFunction() {
                        var x = document.getElementById("navDemo");
                        if (x.className.indexOf("w3-show") == -1) {
                            x.className += " w3-show";
                        } else {
                            x.className = x.className.replace(" w3-show", "");
                        }
                    }

            </script>



        </div>
        <!-- Footer -->
        <footer class="w3-center w3-black w3-padding-16">
            <p>DIDI Pedras@2019 - Desenvolvido por <a href="http://www.devmg.pe.hu" title="Marcel" target="_blank" class="w3-hover-text-green">Marcel Hoyama</a></p>
        </footer>

    </body>
</html>

