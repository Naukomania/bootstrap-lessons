<!DOCTYPE html>
<? include 'lib/functions.php'; ?>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= getTitle($page); ?></title>


    <!-- Bootstrap -->

     <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
     <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css">
     <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
     <link rel="stylesheet" href="vendor/fancybox/css/jquery.fancybox.css">
     <link rel="stylesheet" href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="prime.loc\favicon.ico">
  </head>
  <body>

  <header class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div id="logo"><a href="index.php"><img src="images/log.gif"></a></div>
    <div id="desc"> <p><b>Производство изделий <br>из искусственного камня</b></p></div>
    <div id="adress"><p> Время работы: <br><b>Пн-Пт - 9<sup>00</sup> - 18<sup>00</sup></b><br><span
    <font color="#00b300"><a href="#map">посмотреть на карте</a></font></span></p></div>
        <div id="right-header-block">
          <div class="mail"><p><img src="images/message.jpg"><a href="mailto:info@prime-stone.ru" target="_blank">info@prime-stone.ru</a></p>
          </div>
          <div class="telefon-header"><p><b>+7(495)</b><span><font size="4" ><b>227 49 19</b></font></span></p></div>
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

