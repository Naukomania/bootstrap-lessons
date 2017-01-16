<?php
$item=1;
include 'blocks/head.php';
?>
<section id="slider">
  <div class="container-fluid">
   <div id="imgtopslide">
  </div>
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
   <div id="imgtopslide">
  </div>
  </div>
</section>
<style>
  #services h4 {
    color: #212121;
  }
  #services .item {
    width: 250px;
    height: 315px;
    margin: 20px auto 0;
  }
  #services .item .text-ramka {
    padding-top: 15px;
    margin-left: 110px;
    width: 303px;
    text-align: left;
    font-size: 14px;
    color: black;
    font-weight: 600;
  }
  #ramka-1{
    background-image: url('css/images/ramka-kuhnya2.png');
  }
  #ramka-2{
    background-image: url('css/images/ramka-vanna4.png');
  }
  #ramka-3{
    background-image: url('css/images/ramka-pod2.png');
  }
  #ramka-4{
    background-image: url('css/images/ramka-bar2.png');
  }
  #ramka-5{
    background-image: url('css/images/ramka-reception2.png');
  }
  #ramka-6{
    background-image: url('css/images/ramka-sanuzel2.png');
  }
  .services-details {
    margin-top: 20px;
  }
</style>
<section id="services">
  <div class="container-fluid">
    <div id="razdel-main">
      <h1>Прайм-Стоун изготовит для вас</h1>
    </div>
    <div class="row">

      <div class="col-md-4 col-sm-6">
        <div id="ramka-1" class="item">
          <div class="text-ramka">Столешницы<br> для кухни</div>
          <div id="text-ramka2"></div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div id="ramka-2" class="item">
          <div class="text-ramka">Столешницы<br> для ванной</div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div id="ramka-3" class="item">
          <div class="text-ramka">Подоконники</div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div id="ramka-4" class="item">
          <div class="text-ramka">Барные стойки</div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div id="ramka-5" class="item">
          <div class="text-ramka">Ресепшн</div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div id="ramka-6" class="item">
          <div class="text-ramka">Столешницы<br> для санузлов</div>
        </div>
    </div>
  </div>
  <p class="services-details">
    <a class="btn btn-default" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Другие изделия из искусственного камня</a>
  </p>
  <div class="collapse" id="collapseExample">
    <div class="card card-block">
    Основной продукцией нашего производства являются столешницы для кухни и ванной, а также подоконники. Также мы изготавливаем стеновые кухонные панели, накладки на ванную, мойки, раковины, элементы для лестниц - перила, ступеньи и подступенки. 
    Акриловый камень также незаменим и для производства изделий для коммерческий целей - прилавки, стенды, ресепшен, стойки для гардеробных и пр.
    </div>
  </div>
  
  </div class="container-fluid">
  <div id="razdel-content">
  <div id="razdel-main"><h1>Палитра камней, цвета и текстуры</h1></div>
  Акриловый камень
  </div>
  </div>
  <div id="katalog-kamnya">
  <div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Samsung Staron</a></li>
    <li><a href="#tab2" data-toggle="tab">LG Hi Macs</a></li>
    <li><a href="#tab3" data-toggle="tab">Corian</a></li>
    <li><a href="#tab4" data-toggle="tab">Hanex</a></li>
    <li><a href="#tab5" data-toggle="tab">Tristone</a></li>
    <li><a href="#tab6" data-toggle="tab">Grandex</a></li>
    <li><a href="#tab7" data-toggle="tab">Kerrock</a></li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
      <div id="a123">
      <img src="images/formstone1.png">
      </div>
      <div id="a123">
      <img src="images/formstone2.png">
      </div>
      <div id="a123">
      <img src="images/formstone3.png">
      </div>
      <div id="a123">
      <img src="images/formstone4.png">
      </div>
      <div id="a123">
      <img src="images/formstone5.png">
      </div>
      <div id="a123">
      <img src="images/formstone6.png">
      </div>
      <div id="a123">
      <img src="images/formstone7.png">
      </div>
    </div>
    <div class="tab-pane" id="tab2">
      <p>Привет, я в Разделе 2.</p>
    </div>
    <div class="tab-pane" id="tab3">
      <p>Привет, я в Разделе 3.</p>
    </div>
  </div>
</div>
</section>

    <?php
include 'blocks/footer.php';
?>