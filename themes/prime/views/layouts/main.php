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
		<div id="logo"><a href="index.php"><img src="/images/log.gif"></a></div>
		<div id="desc"> <p><b>Производство изделий <br>из искусственного камня</b></p></div>
		<div id="adress">
			<p> Время работы: <br><b>Пн-Пт - 9<sup>00</sup> - 18<sup>00</sup></b><br><span
			<font color="#00b300"><a href="#map">посмотреть на карте</a></font></span></p>
		</div>
		<div id="right-header-block">
			<div class="mail">
				<p><img src="/images/message.jpg"><a href="mailto:info@prime-stone.ru" target="_blank">info@prime-stone.ru</a></p>
			</div>
			<div class="telefon-header">
				<p><b>+7(495)</b><span><font size="4" ><b>227 49 19</b></font></span></p>
			</div>
		</div>
	</div>
</header>

<nav class="navbar navbar-default navbar-fixed-top" id="menu">
  <div class="container-fluid">
    <div class="menu"><ul class="nav navbar-nav">
        <li><a href="index.php">Прайм-Стоун<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Акции</a></li>
        <li><a href="#">Цены</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Продукция <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Столешницы для кухни</a></li>
            <li><a href="#">Столешницы для ванной комнаты</a></li>
            <li><a href="#">Подоконники</a></li>
            <li><a href="#">Барные стойки</a></li>
            <li><a href="#">Ресепшн</a></li>
            <li><a href="#">Столешницы для санузлов</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Мойки</a></li>
            <li><a href="#">Раковины</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Изделия для лестницы</a></li>
          </ul>
        </li>
        <li><a href="foto.php">Наши работы</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Акриловый камень <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="staron.php">Samsung Staron</a></li>
            <li><a href="#">LG Hi Macs</a></li>
            <li><a href="#">Corian</a></li>
            <li><a href="#">Hanex</a></li>
            <li><a href="#">Tristone</a></li>
            <li><a href="#">Grandex</a></li>
            <li><a href="#">Kerrock</a></li>
            <li><a href="#">Montelli</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Кварцевый камень <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Samsung Radianz</a></li>
            <li><a href="#">Caesarstone</a></li>
            <li><a href="#">Cambria</a></li>
            <li><a href="#">Plazastone</a></li>
            <li><a href="#">Scorino</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Еще<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Наше производство</a></li>
            <li><a href="#">Кромки и бортики для столешниц</a></li>
            <li><a href="#">Стеновые панели</a></li>
            <li><a href="#">Накладки для ванных</a></li>
            <li><a href="#">Тумбы для ванных комнат</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="margin-tmp"></div>

<?php echo $content; ?>

<div id="background-wrapper"></div>
<div id="order-form" class="lightbox">
  Сделать расчет
</div>
<section id="footer">
	<div id="imgtopslide"></div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-6"> 
				<a href="#">
					<img src="/images/logomini-footer/staron-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6"> 
				<a href="#">
					<img src="/images/logomini-footer/hanex-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2 col-sm-4col-xs-6"> 
				<a href="#">
					<img src="/images/logomini-footer/corian-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6"> 
				<a href="#">
					<img src="/images/logomini-footer/kerrock-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6"> 
				<a href="#">
					<img src="/images/logomini-footer/lg-himacs-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6"> 
				<a href="#">
					<img src="/images/logomini-footer/tristone-logo-mini.jpg">
				</a>
			</div>
		</div><!-- end row -->



		<div class="row">
			<div class="col-md-1 col-sm-4 col-xs-6"> 
				<a href="#">
					<img src="/images/logomini-footer/plaza-stone-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6"> 
				<div class="footer-text"><h5><a href="#">
					Изделия из искусственного камня</a></h5>
					<ul>
						<li><a href="#">Кухонные столешницы</a></li>
						<li><a href="#">Столешницы для ванной</a></li>
						<li><a href="#">Подоконники</a></li>
						<li><a href="#">Мойки</a></li>
						<li><a href="#">Раковины</a></li>
						<li><a href="#">Барные стойки</a></li>
						<li><a href="#">Столешницы для санузлов</a></li>
						<li><a href="#">Ресепшен</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6"> 
				<div class="footer-text"><h5><a href="#">
					Акриловый искусственный камень</a></h5>
					<ul>
						<li><a href="#">Samsung Straron (Ю. Корея)</a></li>
						<li><a href="#">LG HiMacs (Ю. Корея)</a></li>
						<li><a href="#">Corian (США)</a></li>
						<li><a href="#">Montelli (США-Китай)</a></li>
						<li><a href="#">Tristone (Ю. Корея)</a></li>
						<li><a href="#">Hanex (Ю. Корея)</a></li>
						<li><a href="#">Grandex (Ю. Корея)</a></li>
						<li><a href="#">Kerrock (Словения)</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6"> 
				<div class="footer-text"><h5><a href="#">
					Кварцевый камень</a></h5>
					<ul>
						<li><a href="#">Samsung Radianz (Ю. Корея)</a></li>
						<li><a href="#">Scorino (Италия)</a></li>
						<li><a href="#">Caesarstone (Израиль)</a></li>
						<li><a href="#">Plaza Stone (Россия)</a></li>
						<li><a href="#">Cambria (США)</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6"> 
				<a  class="order-form-link" data-source="footer" href="#">Сделать расчет</a>
			</div>
		</div><!-- end row -->
		<br>
		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-6"> 
				<a href="#">
					<img src="/images/logomini-footer/scorino-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6"> 
				<a href="#">
					<img src="/images/logomini-footer/grandex-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6"> 
				<a href="#">
					<img src="/images/logomini-footer/caesarstone-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6"> 
				<a href="#">
					<img src="/images/logomini-footer/cambria-log%D0%BE-mini.jpg">
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6"> 
				<a href="#">
					<img src="/images/logomini-footer/montelli-logo-mini.jpg">
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6"> 
				<a href="#">
					<img src="/images/logomini-footer/samsung-radianz-logo-mini.jpg">
				</a>
			</div>
		</div><!-- end row -->
	</div><!-- end container -->
</section>
<div class="footer-gold">Подвальчик</div>
<div class="footer-green">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">&nbsp &nbsp2007-<?php echo date('Y'); ?></div>
			<div class="col-md-4 col-sm-6">
				<a href="prime-stone.ru">ПРАЙМ - СТОУН - столешницы из искусственного камня</a>
			</div>
		</div>
	</div>
</div>
  
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= Yii::app()->request->baseUrl; ?>/vendor/jquery/jquery.js"></script>
<script src="<?= Yii::app()->request->baseUrl; ?>/vendor/jquery-ui/jquery-ui.js"></script>
<script src="<?= Yii::app()->request->baseUrl; ?>/vendor/fancybox/js/jquery.fancybox.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= Yii::app()->request->baseUrl; ?>/vendor/bootstrap/js/bootstrap.js"></script>
<script src="<?= Yii::app()->request->baseUrl; ?>/js/script.js"></script>
</body>
</html>
