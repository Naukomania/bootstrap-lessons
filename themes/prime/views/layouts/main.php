<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="ru">

	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/vendor/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/vendor/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/vendor/fancybox/css/jquery.fancybox.css">
	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/css/transition.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">
	<link rel="<?= Yii::app()->request->baseUrl; ?>/favicon.ico">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<header class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 col-sm-3">
				<div id="logo"><a href="<?= Yii::app()->request->baseUrl; ?>/"><img src="/images/log.gif"></a></div>
				<div id="call" class="visible-xs"><a href="tel:+79852274919"><i class="fa fa-phone fa-3x"></a></i></div>
			</div>
			<div class="col-md-2 col-sm-3 hidden-xs">
				<div id="desc"> <p><b>Производство изделий <br>из искусственного камня</b></p></div>
			</div>
			<div class="col-md-2 col-md-offset-1 visible-md visible-lg">
				<div id="adress">
					<p> Время работы: <br><b>Пн-Пт - 9<sup>00</sup> - 18<sup>00</sup></b><br><span>
					<font color="#00b300"><a href="#map">посмотреть на карте</a></font></span></p>
				</div>
			</div>
			<div class="col-md-2 col-md-offset-1 col-sm-3 hidden-xs">
				<div class="telefon-header">
					+7(495)<span class="number">227 49 19</span>
				</div>
			</div>
			<div class="col-md-2 col-sm-3 hidden-xs">
				<div class="mail">
					<p><img src="<?= Yii::app()->request->baseUrl; ?>/images/message.jpg"><a href="mailto:info@prime-stone.ru" target="_blank">info@prime-stone.ru</a></p>
				</div>
			</div>
		</div>
	</div>
</header>

<nav class="navbar navbar-default navbar-fixed-top" id="menu">
  <div class="container-fluid">
  <div class="row">
    <div class="navbar-header hidden-sm">
        <a class="navbar-brand" href="/">Прайм-Стоун<span class="sr-only">(current)</span></a>
        <button type="button"
                class="navbar-toggle"
                data-toggle="collapse"
                data-target="#main-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="main-menu" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
        <li class="dropdown<?= $this->activeClass(Controller::PRODUCTION_LINK); ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Продукция <span class="caret"></span></a>
          <ul class="dropdown-menu">

          <li><a href="/site/izd">Изделия из искусственного камня</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/site/kuhnya">Столешницы для кухни</a></li>
            <li><a href="/site/vanna">Столешницы для ванной комнаты</a></li>
            <li><a href="/site/pod">Подоконники</a></li>
            <li><a href="/site/bar">Барные стойки</a></li>
            <li><a href="/site/rec">Ресепшн</a></li>
            <li><a href="/site/san">Столешницы для санузлов</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/site/moyki">Мойки</a></li>
            <li><a href="/site/rac">Раковины</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/site/lest">Изделия для лестницы</a></li>
          </ul>
        </li>
        <li class="dropdown<?= $this->activeClass(Controller::PRICE_LINK); ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Цены <span class="caret"></span></a>
          <ul class="dropdown-menu">

          <li><a href="/price/index">Цены на изделия (акрил)</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/price/quartz">Цены на изделия (кварц)</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/price/skidka">Акции</a></li>
            </ul></li>
        <li class="<?= $this->activeClass(Controller::WORK_LINK); ?>"><a href="/site/foto">Наши работы</a></li>


        <li class="dropdown<?= $this->activeClass(Controller::ACRYLIC_LINK); ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Акриловый камень <span class="caret"></span></a>
          <?php $this->widget('zii.widgets.CMenu',array(
              'htmlOptions' => array(
                  'class' => 'dropdown-menu'
              ),
              'items'=>array(
                  array('label'=>'Samsung Staron', 'url'=>array('/catalog/staron')),
                  array('label'=>'Kerrock', 'url'=>array('catalog/kerrock')),
                  array('label'=>'LG Hi Macs', 'url'=>array('/catalog/lg_hi_macs')),
                  array('label'=>'Corian', 'url'=>array('/catalog/corian')),
                  array('label'=>'Hanex', 'url'=>array('/catalog/hanex')),
                  array('label'=>'Geta Core', 'url'=>array('catalog/getacore')),
                  array('label'=>'Tristone', 'url'=>array('catalog/tristone')),
                  array('label'=>'Montelli', 'url'=>array('catalog/montelli')),
                  array('label'=>'Grandex', 'url'=>array('catalog/grandex'))
                  
              ),
          )); ?>
        </li>
        <li class="dropdown<?= $this->activeClass(Controller::QUARTZ_LINK); ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Кварцевый камень <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/catalog/radianz">Samsung Radianz</a></li>
            <li><a href="#">Caesarstone</a></li>
            <li><a href="#">Cambria</a></li>
            <li><a href="#">Plazastone</a></li>
            <li><a href="#">Scorino</a></li>
          </ul>
        </li>
        <li class="<?= $this->activeClass(Controller::CONTACTS_LINK); ?>"><a href="/site/kontakty">Контакты</a></li>
        
        <li class="dropdown hidden-sm hidden-md<?= $this->activeClass(Controller::ADDITIONAL_LINK); ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Еще<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="/site/remont">Ремонт столешниц / моек</a></li>
          <!-- 
            <li><a href="#">Наше производство</a></li>
            <li><a href="#">Кромки и бортики для столешниц</a></li>
            <li><a href="#">Стеновые панели</a></li>
            <li><a href="#">Накладки для ванных</a></li>
            <li><a href="#">Тумбы для ванных комнат</a></li> 
  </li>-->
          </ul>
      

		<? if(Yii::app()->user->name == 'admin'): ?>
         <li class="dropdown hidden-sm hidden-md<?= $this->activeClass(Controller::ADMIN_LINK); ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Админка<span class="caret"></span></a>
          <?php
          $this->widget('zii.widgets.CMenu', array(
    'items'=>array(
     array('label'=>'Бренды', 'url'=>array('/brand/admin')),
     array('label'=>'Коллекции', 'url'=>array('/collection/admin')),
     array('label'=>'Камни', 'url'=>array('/stone/admin')),
     array('label'=>'Изделия', 'url'=>array('/product/admin')),
    ),
    'htmlOptions'=>array('class'=>'dropdown-menu'),
   ));?>
        </li>
    	<? endif; ?>
      </ul>
      </div>
    </div>
    </div>
  </div>
</nav>
<div class="content-wrapper">
<?php echo $content; ?>
</div>
<div id="background-wrapper"></div>
<div id="order-form" class="lightbox">
  Сделать расчет
</div>
<section id="footer" class="visible-md visible-lg">
	<div id="imgtopslide"></div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-2"> 
				<a href="/catalog/staron">
					<img src="/images/logomini-footer/staron-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2"> 
				<a href="/catalog/hanex">
					<img src="/images/logomini-footer/hanex-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2"> 
				<a href="/catalog/corian">
					<img src="/images/logomini-footer/corian-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2"> 
				<a href="/catalog/kerrock">
					<img src="/images/logomini-footer/kerrock-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2"> 
				<a href="/catalog/lg_hi_macs">
					<img src="/images/logomini-footer/lg-himacs-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2"> 
				<a href="/catalog/tristone">
					<img src="/images/logomini-footer/tristone-logo-mini.jpg">
				</a>
			</div>
		</div><!-- end row -->



		<div class="row">
			<div class="col-md-1"> 
				<a href="#">
					<img src="/images/logomini-footer/plaza-stone-logo-mini.jpg">
				</a>
				<a href="#">
					<img src="/images/logomini-footer/getacore-logo-mini.jpg">
				</a>
			</div>

			<div class="col-md-3"> 
				<div class="footer-text"><h5><a href="/site/izd">
					Изделия из искусственного камня</a></h5>
					<ul>
						<li><a href="/site/kuhnya">Кухонные столешницы</a></li>
						<li><a href="/site/vanna">Столешницы для ванной</a></li>
						<li><a href="/site/pod">Подоконники</a></li>
						<li><a href="/site/moyki">Мойки</a></li>
						<li><a href="/site/rac">Раковины</a></li>
						<li><a href="/site/bar">Барные стойки</a></li>
						<li><a href="/site/san">Столешницы для санузлов</a></li>
						<li><a href="/site/rec">Ресепшен</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3"> 
				<div class="footer-text"><h5><a href="#">
					Акриловый искусственный камень</a></h5>
					<ul>
						<li><a href="/catalog/staron">Samsung Straron (Ю. Корея)</a></li>
						<li><a href="/catalog/lg_hi_macs">LG HiMacs (Ю. Корея)</a></li>
						<li><a href="/catalog/corian">Corian (США)</a></li>
						<li><a href="/catalog/montelli">Montelli (США-Китай)</a></li>
						<li><a href="/catalog/tristone">Tristone (Ю. Корея)</a></li>
						<li><a href="/catalog/hanex">Hanex (Ю. Корея)</a></li>
						<li><a href="/catalog/grandex">Grandex (Ю. Корея)</a></li>
						<li><a href="/catalog/kerrock">Kerrock (Словения)</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3"> 
				<div class="footer-text"><h5><a href="#">
					Кварцевый камень</a></h5>
					<ul>
						<li><a href="/catalog/radianz">Samsung Radianz (Ю. Корея)</a></li>
						<li><a href="#">Scorino (Италия)</a></li>
						<li><a href="#">Caesarstone (Израиль)</a></li>
						<li><a href="#">Plaza Stone (Россия)</a></li>
						<li><a href="#">Cambria (США)</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2"> 
				<a  class="order-form-link" data-source="footer" href="#">Сделать расчет</a>
			</div>
		</div><!-- end row -->
		<br>
		<div class="row">
			<div class="col-md-2"> 
				<a href="#">
					<img src="/images/logomini-footer/scorino-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2"> 
				<a href="/catalog/grandex">
					<img src="/images/logomini-footer/grandex-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2"> 
				<a href="#">
					<img src="/images/logomini-footer/caesarstone-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2"> 
				<a href="#">
					<img src="/images/logomini-footer/cambria-log%D0%BE-mini.jpg">
				</a>
			</div>
			<div class="col-md-2"> 
				<a href="/catalog/montelli">
					<img src="/images/logomini-footer/montelli-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2"> 
				<a href="/catalog/radianz">
					<img src="/images/logomini-footer/samsung-radianz-logo-mini.jpg">
				</a>
			</div>
		</div><!-- end row -->
	</div><!-- end container -->
</section>
<div id="foooter2" class="visible-md visible-lg">
<div class="footer-gold">&nbsp &nbspМосква, ул. Енисейская д.1 тел 227-21-31</div>
<div class="footer-green">
	<div class="container">
		<div class="row">
			<div class="col-md-4">2007-<?php echo date('Y'); ?></div>
			<div class="col-md-4">
				<a href="prime-stone.ru">ПРАЙМ - СТОУН - столешницы из искусственного камня</a>
			</div>
		</div>
	</div>
</div>
  </div>
  <!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter12355669 = new Ya.Metrika({id:12355669,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/12355669" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= Yii::app()->request->baseUrl; ?>/vendor/jquery/jquery.js"></script>
<script src="<?= Yii::app()->request->baseUrl; ?>/vendor/jquery-ui/jquery-ui.js"></script>
<script src="<?= Yii::app()->request->baseUrl; ?>/vendor/fancybox/js/jquery.fancybox.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= Yii::app()->request->baseUrl; ?>/vendor/bootstrap/js/bootstrap.js"></script>
<script src="<?= Yii::app()->request->baseUrl; ?>/js/script.js"></script>
</body>
</html>
