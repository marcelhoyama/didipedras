<title style="font-family: Blippo, fantasy;">DidiPedras - <?php echo $viewData['frase'];?></title>


  
<div class="container">

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
 <h1 class="my-5 text-center">CONTATO</h1>
   <p class="text-center"><i>Vamos entrar em contato e falar sobre o seu próximo projeto.</i></p>
               
  
 
     <!-- The Contact Section -->
            
               
              
                  
                 

                        <form method="POST" id="cadastrarclientes">
                          
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Seu Nome" name="nome" id="nome">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Seu melhor Email" name="email" id="email">
                                </div>

                               <div class="form-group">
                            <input class="form-control" type="text" placeholder="Seu Celular" name="fone" id="fone">  
                                </div>


 <div class="form-group">
                            <textarea class="form-control" type="text" placeholder="Mensagem" name="mensagem" required name="Comment"></textarea>
 </div>
                            <button class="btn btn-success " type="submit">ENVIAR</button>
                    
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