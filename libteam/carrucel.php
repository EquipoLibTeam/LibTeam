
  
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  
  
<div class="container" id="contenedor">
    <div id="myCarousel" align="center" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="active item"><img  src="img/desbloqueo.png" alt="banner1" /></div>
        <div class="item"><img  src="img/IMEI.jpg" alt="banner2" /></div>
        <div class="item"><img  src="img/celulares.jpg" alt="banner3" /></div>
       
      </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
  

  
 

<script>
    $(document).ready(function(){
        $('.myCarousel').carousel({
            interval: 1000
        });
    });
</script> 
  
  