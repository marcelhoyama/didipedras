



<div class="text-center">
    <img  src="<?php BASE_URL; ?>assets/images/paralelepipedo_bloquete/foto (8).jpeg"  class="img-thumbnail" style="width: 300px;"alt="Palheta e arrimo">
</div>
<br>
<br>

<h2 class="text-center">DIDI - Pedras: Matéria-Prima</h2>










<h2> Nossa matéria-prima</h2>
<!-- The grid: four columns -->
<div class="row">



<!--

    <div id="slideshowExemplo" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target='#demo' data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">

                <div class="column">
                    <img  src="<?php BASE_URL; ?>assets/images/materia-prima/materia (1).jpeg" alt="Palheta" onclick="myFunction(this);">
                </div>


            </div>


            <?php for ($i = 2; $i <= 21; $i++): ?>
                <div class="carousel-item">
                    <div class="column">


                        <img src="<?php BASE_URL; ?>assets/images/materia-prima/materia (<?php echo $i; ?>).jpeg" alt="Palheta" onclick="myFunction(this);">
                    </div>
                </div>
            <?php endfor; ?>








        </div>

        <a class="carousel-control-prev" href="#slideshowExemplo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slideshowExemplo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

</div>-->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
             <img src="<?php BASE_URL; ?>assets/images/materia-prima/materia (9).jpeg" alt="Palheta" >
                 
    </div>
    <div class="carousel-item">
          <img src="<?php BASE_URL; ?>assets/images/materia-prima/materia (8).jpeg" alt="Palheta">
                 
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<!-- The expanding image container -->
<div class="container">
    <!-- Close the image -->
    <span onclick="this.parentElement.style.display = 'none'" class="closebtn">&times;</span>

    <!-- Expanded image -->
    <img id="expandedImg" style="width:100%">

    <!-- Image text -->
    <div id="imgtext"></div>
</div>

<script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>


