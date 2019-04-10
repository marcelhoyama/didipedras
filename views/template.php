<!DOCTYPE html>
<html lang="pt-br">
<title>DIDI - Pedras</title>
<meta charset="UTF=8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
        <link rel="stylesheet" href="<?php BASE_URL; ?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php BASE_URL; ?>assets/css/style.css"/>
<link rel="stylesheet" href="<?php BASE_URL; ?>assets/css/w3.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="<?php BASE_URL; ?>home" class="w3-bar-item w3-button2"><b>DIDI - Pedras</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button2">Produtos e Serviços</a>
      <a href="#about" class="w3-bar-item w3-button2">Sobre</a>
      <a href="#contact" class="w3-bar-item w3-button2">Contato</a>
    </div>
  </div>
</div>

<div class="w3-content w3-padding" style="max-width:1564px">

   <!--  aqui onde vai o corpo das paginas do sistema -->
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>


 <script type="text/javascript" scr="<?php BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" scr="<?php BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" scr="<?php BASE_URL; ?>assets/js/jquery.min.js"></script>

 
 <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTATO</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
     <i class="fa fa-map-marker" style="width:30px"></i> Rua Jordânia 699 Vilarejo Cabreúva - SP 13315-000 Brasil<br>
     <i class="fa fa-phone" style="width:30px"></i> <a href="https://api.whatsapp.com/send?phone=5511998921840&text=Ola!%20Fiquei%20interessado%20no%20seu%20serviço!">Celular: +55 11 9.9892-1840 vivo</a><br>
     <i class="fa fa-phone" style="width:30px"></i><a href="https://api.whatsapp.com/send?phone=5511991239021&text=Ola!%20Fiquei%20interessado%20no%20seu%20serviço!"> Celular: +55 11 9.9123-9021 claro</a><br>
     <i class="fa fa-phone" style="width:30px"></i><a href="https://api.whatsapp.com/send?phone=5511997193009&text=Ola!%20Fiquei%20interessado%20no%20seu%20serviço!"> Celular: +55 11 9.9719-3009 vivo</a><br>
        <i class="fa fa-envelope" style="width:30px"> </i> E-mail: didi_783@hotmail.com<br>
      </div>
      <div class="w3-col m6">
           <p>Vamos entrar em contato e falar sobre o seu próximo projeto.</p>
           <form method="POST">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Seu Nome" name="nome" required name="Name">
            </div>
            <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Email" name="email" required name="Email">
            </div>
              
               </div>
            <input class="w3-input w3-section w3-border" type="text" placeholder="Celular" name="celular" required name="celular">  
         
            
            
         
            <textarea class="w3-input w3-section w3-border" type="text" placeholder="Mensagem" name="mensagem" required name="Comment"></textarea>
            
          <button class="w3-button2 w3-black w3-section w3-right" type="submit">ENVIAR</button>
        </form>
      </div>
    </div>
  </div>
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center"> Horário de funcionamento</h2>
 
    <div class="w3-row w3-padding-22">
     
         <div class="w3-center">
    
<i class="" style="width:30px"> </i>Domingo á Domingo das 07:00 – 22:00<br>

         </div>
         </div>
     
  </div>
  
<!-- Image of location/map -->
<div class="w3-container">
    <iframe class=""  src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d4358.78654247371!2d-47.05745110518498!3d-23.268983553736316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94cf3b53ab0521bf%3A0x5fb2ab6e9413c629!2sDidi+pedras!3m2!1d-23.269174!2d-47.05414!5e0!3m2!1spt-BR!2sbr!4v1554720487244!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Devenvolvido por <a href="http://www.devmg.pe.hu" title="W3.CSS" target="_blank" class="w3-hover-text-green">Marcel Hoyama</a></p>
</footer>

</body>
</html>

