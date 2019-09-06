<title style="font-family: Blippo, fantasy;">DidiPedras - <?php echo $viewData['frase'];?></title>

<br>
 <br>
<br>
<div class="container">
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




<div class="gallery-container">
  
    <h1 class="text-center">DidiPedras: Nossa Matéria-Prima</h1>
  
    <p class="page-description text-center"></p>
      
    <div class="tz-gallery">
  
        <div class="row mb-3">
            <?php for ($i=1; $i < 5; $i++) {
     ?>
            
     <div class="col-sm-4">
                <div class="card">
                    <a class="lightbox" href="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i;?>).jpeg">
                    <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i;?>).jpeg" class="card-img-top">
                    </a>
                
            </div>
     </div>
<?php } ?>
           
           
         
        </div>
        
           <div class="row mb-3">
            <?php for ($i=4; $i < 9; $i++) {
     ?>
            
     <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i;?>).jpeg">
                    <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i;?>).jpeg" class="card-img-top">
                    </a>
                </div>
            </div>
<?php } ?>
           
           
         
        </div>
        
           <div class="row mb-3">
            <?php for ($i=10; $i < 13; $i++) {
     ?>
            
     <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i;?>).jpeg">
                    <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i;?>).jpeg" class="card-img-top">
                    </a>
                </div>
            </div>
<?php } ?>
           
           
         
        </div>
           <div class="row mb-3">
            <?php for ($i=14; $i < 17; $i++) {
     ?>
            
     <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i;?>).jpeg">
                    <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i;?>).jpeg" class="card-img-top">
                    </a>
                </div>
            </div>
<?php } ?>
           
           
         
        </div>
        
           <div class="row mb-3">
            <?php for ($i=18; $i < 23; $i++) {
     ?>
            
     <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i;?>).jpeg">
                    <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i;?>).jpeg" class="card-img-top">
                    </a>
                </div>
            </div>
<?php } ?>
           
           
         
        </div>
        
  
    
  


    </div>



</div>



</div>