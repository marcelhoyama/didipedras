<title style="font-family: Blippo, fantasy;">DidiPedras - <?php echo $viewData['frase']; ?></title>

<br>
<br>
<br>
<div class="container">

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
    <!-- Your share button code -->
    <div class="fb-share-button" 
         data-href="http://didipedras.com.br/materiaprima" 
         data-layout="button_count">
    </div>


    <br>






    <h1 class="text-center">DidiPedras: Nossa Matéria-Prima</h1>





    <div class="row mb-3">
        <?php for ($i = 1; $i <= 4; $i++) {
            ?>

            <div class="col-md">
                <div class="materia card">
                    <a class="" href="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i; ?>).jpeg" data-lightbox="materiaprima" data-title="Matéria-Prima">
                        <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i; ?>).jpeg" class="card-img-top" id="imgfolheta">
                    </a>

                </div>
            </div>
        <?php } ?>



    </div>

    <div class="row mb-3">
        <?php for ($i = 5; $i <= 8; $i++) {
            ?>

            <div class="col-md">
                <div class="materia card">
                    <a class="" href="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i; ?>).jpeg" data-lightbox="materiaprima" data-title="Matéria-Prima">
                        <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i; ?>).jpeg" class="card-img-top" id="imgfolheta">
                    </a>
                </div>
            </div>
        <?php } ?>



    </div>

    <div class="row mb-3">
        <?php for ($i = 9; $i <= 12; $i++) {
            ?>

            <div class="col-md">
                <div class="materia card">
                    <a class="" href="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i; ?>).jpeg" data-lightbox="materiaprima" data-title="Matéria-Prima">
                        <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i; ?>).jpeg" class="card-img-top" id="imgfolheta">
                    </a>
                </div>
            </div>
        <?php } ?>



    </div>
    <div class="row mb-3">
        <?php for ($i = 13; $i <= 16; $i++) {
            ?>

            <div class="col-md">
                <div class="materia card">
                    <a class="" href="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i; ?>).jpeg" data-lightbox="materiaprima" data-title="Matéria-Prima">
                        <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i; ?>).jpeg" class="card-img-top" id="imgfolheta">
                    </a>
                </div>
            </div>
        <?php } ?>



    </div>

    <div class="row mb-3">
        <?php for ($i = 17; $i <= 20; $i++) {
            ?>

            <div class="col-md">
                <div class="materia card">
                    <a class="" href="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i; ?>).jpeg"data-lightbox="materiaprima" data-title="Matéria-Prima">
                        <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i; ?>).jpeg" class="card-img-top" id="imgfolheta">
                    </a>
                </div>
            </div>
        <?php } ?>



    </div>

    <div class="row mb-3">
        <?php for ($i = 21; $i <= 21; $i++) {
            ?>

            <div class="col-md-3">
                <div class=" materia card">
                    <a class="" href="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i; ?>).jpeg" data-lightbox="materiaprima" data-title="Matéria-Prima">
                        <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i; ?>).jpeg" class="card-img-top" id="imgfolheta">
                    </a>
                </div>
            </div>
        <?php } ?>



    </div>













</div>