<title style="font-family: Blippo, fantasy;">DIDI - Pedras - <?php echo $viewData['frase'];?></title>


  
<div class="text-center">
    <!--<img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (4).jpeg"  class="img-thumbnail" style="width: 300px;"alt="Matéria-prima">-->
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
     data-href="http://didipedras.com.br/contato" 
     data-layout="button_count">
</div>


<br>
            <!-- The Contact Section -->
            <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
                <h2 class="w3-wide w3-center">CONTATO</h2>
                <p class="w3-opacity w3-center"><i>Vamos entrar em contato e falar sobre o seu próximo projeto.</i></p>
                <div class="w3-row w3-padding-32">
                    <div class="w3-col m6 w3-large w3-margin-bottom">
                        <i class="fa fa-map-marker" style="width:30px"></i> Rua Jordânia 699 Vilarejo - Cabreúva - SP 13315-000 <br>
                        <i  style="width:30px"></i> <a class="w3-hover-text-green" href="https://api.whatsapp.com/send?phone=5511998921840&text=Ola!%20Fiquei%20interessado%20no%20seu%20serviço!"><img src="<?php BASE_URL; ?>assets/images/whatsapp.jpg" width="25px" height="25px" >  11 9.9892-1840 vivo</a><br>
                          <i style="width:30px"></i><a class="w3-hover-text-green"href="https://api.whatsapp.com/send?phone=5511991239021&text=Ola!%20Fiquei%20interessado%20no%20seu%20serviço!"> <img src="<?php BASE_URL; ?>assets/images/whatsapp.jpg" width="25px" height="25px" >  11 9.9123-9021 claro</a><br>
                         <i style="width:30px"></i><a class="w3-hover-text-green" href="https://api.whatsapp.com/send?phone=5511997193009&text=Ola!%20Fiquei%20interessado%20no%20seu%20serviço!"> <img src="<?php BASE_URL; ?>assets/images/whatsapp.jpg" width="25px" height="25px" >  11 9.9719-3009 vivo</a><br>
                        <i class="fa fa-envelope" style="width:30px"> </i> E-mail: didi_783@hotmail.com<br>
                    </div>
                    <div class="w3-col m6">

                        <form method="POST" id="cadastrarclientes">
                            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                                <div class="w3-half">
                                    <input class="w3-input w3-border" type="text" placeholder="Seu Nome" name="nome" id="nome">
                                </div>
                                <div class="w3-half">
                                    <input class="w3-input w3-border" type="text" placeholder="Email" name="email" id="email">
                                </div>

                                <div class="w3-half">
                            <input class="w3-input w3-section w3-border" type="text" placeholder="Celular" name="fone" id="fone">  
                                </div>



                            <textarea class="w3-input w3-section w3-border" type="text" placeholder="Mensagem" name="mensagem" required name="Comment"></textarea>

                            <button class="w3-button2 w3-green w3-section w3-right" type="submit">ENVIAR</button>
                    </div>
                        </form>
                        
                        <div class="danger"><!--
            <?php if (isset($erro) && !empty($erro)): ?>
                <div class="alert alert-danger"><?php echo $erro; ?></div> 
            <?php endif; ?>
        </div>
        <div class="danger">
            <?php if (isset($ok) && !empty($ok)): ?>
                <div class="alert alert-success"><?php echo $ok; ?></div> 
            <?php endif; ?>
        </div>-->
                    </div>
                </div>
            </div>
            </div>        