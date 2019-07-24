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
 <h2 class="w3-wide w3-center">CONTATO</h2>
   <p class="w3-opacity w3-center"><i>Vamos entrar em contato e falar sobre o seu próximo projeto.</i></p>
               
  <div class="row">
 
     <!-- The Contact Section -->
            
               
              
                  
                    <div class="w3-col w3-center w3-margin ">

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

                            <button class="btn btn-success w3-right" type="submit">ENVIAR</button>
                    
                        </form>
    </div>
  
            
                        
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
             