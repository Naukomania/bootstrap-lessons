<?php
$item=1;
include 'blocks/head.php';
?>
<section id="slider">
  <div class="container-fluid">
  <div id="carousel" class="carousel slide">
  <!--Индикаторы слайдов-->
   <ol class="carousel-indicators">
   <li class="active" data-target="#carousel" data-slide-to="0"></li>
   <li data-target="#carousel" data-slide-to="1"></li>
   <li data-target="#carousel" data-slide-to="2"></li>
   <li data-target="#carousel" data-slide-to="3"></li>
   <li data-target="#carousel" data-slide-to="4"></li>
   <li data-target="#carousel" data-slide-to="5"></li>
   <li data-target="#carousel" data-slide-to="6"></li>
   <li data-target="#carousel" data-slide-to="7"></li>
   <li data-target="#carousel" data-slide-to="8"></li>
   <li data-target="#carousel" data-slide-to="9"></li>
   </ol>
   <!--Слайды-->
   <div class="carousel-inner">
     <div class="item active">
       <img src="images/mine1.jpg" alt="">
       <div class="carousel-caption">
        <h3>Столешницы</h3>
        <p> из искусственного камня для кухни</p>
        </div>
     </div>
     <div class="item">
       <img src="images/mine2.jpg" alt="">
       <div class="carousel-caption">
        <h3>Изготовление на заказ</h3>
        <p>в сжатые сроки по индивидуальным замерам</p>
        </div>
     </div>
     <div class="item">
       <img src="images/mine3.jpg" alt="">
       <div class="carousel-caption">
        <h3>Цены от производителя</h3>
        <p>на изделия из акрилового и кварцевого камня</p>
        </div>
     </div>
     <div class="item">
       <img src="images/mine4.jpg" alt="">
       <div class="carousel-caption">
        <h3>Любые формы и размеры</h3>
        <p>столешниц, подоконников и других изделий</p>
        </div>
     </div>
     <div class="item">
       <img src="images/mine5.jpg" alt="">
       <div class="carousel-caption">
        <h3>Широкая цветовая гамма</h3>
        <p>на любой вкус. Более 1000 цветов!</p>
        </div>
     </div>
     <div class="item">
       <img src="images/mine6.jpg" alt="">
       <div class="carousel-caption">
        <h3>Изготовление на заказ</h3>
        <p>столешниц для санузлов и ванных комнат</p>
        </div>
     </div>
     <div class="item">
       <img src="images/mine7.jpg" alt="">
       <div class="carousel-caption">
        <h3>Кухонные мойки и раковины</h3>
        <p>в цвет столешницы - без стыков и швов</p>
        </div>
     </div>
     <div class="item">
       <img src="images/mine8.jpg" alt="">
       <div class="carousel-caption">
        <h3>Большой опыт</h3>
        <p>работы в сфере изготовления изделий из искусственного камня</p>
        </div>
     </div>
     <div class="item">
       <img src="images/mine9.jpg" alt="">
       <div class="carousel-caption">
        <h3>Мы используем только качественный материал</h3>
        <p>Весь материал сертифицирован</p>
        </div>
     </div>
     <div class="item">
       <img src="images/mine10.jpg" alt="">
       <div class="carousel-caption">
        <h3>Собственное производство</h3>
        <p>Высокое качество. Гарантия!</p>
        </div>
     </div>
   </div>
   <!--Стрелки переключения слайдов-->
   <a href="#carousel" class="left carousel-control" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
   </a>
   <a href="#carousel" class="right carousel-control" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
   </a>
    Секция с картинками
  </div>
</section>
<section id="services">
  <div class="container-fluid">
  <h2>Наши изделия и услуги</h2>
  <div id="block-ramki">
  <div id="ramka">
  <div id="img-ramka">
  <img src="images/eskiz-kuhnya.jpg">Столешницы для кухни</div>
  <div id="text-ramka">Производим на заказ столешницы для кухни из акрилового и кварцевого камня. Более 1000 цветов!
  Быстро и качественно! Цены от производителя!
  Подробнее
  </div>
  </div>
  <div id="ramka">
  </div>
  <div id="ramka2">
   <div id="text-ramka2">Столешницы для кухни
  </div>
  </div>
  </div>
  </div>
</section>
</div>
    <?php
include 'blocks/footer.php';
?>