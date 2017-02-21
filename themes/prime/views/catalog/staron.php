
<?php
$page = [
    'title' => 'Samsung Staron - искусственный акриловый камнень - Прайм-Стоун',
    'name' => 'Samsung Staron',
    'keywords' => 'Самсунг старон, samsung staron, staron, старон',
    'description' => 'Каталог цветов искусственного акрилового камня Samsung Staron (самсунг старон).',
  ];
$collection = [
    'title' => 'Коллекция Aspen',
    'items' => [
        [
            'title' => 'Aspen Brown - AB632',
            'src' => '/samsung_staron/images/katalog/staron_ab632_aspen_brown.jpg',
        ],
        [
            'title' => 'Aspen Brown - AB632',
            'src' => '/samsung_staron/images/katalog/staron_ab632_aspen_brown.jpg',
        ],
    ],
];


?>

<section id="staron">
 <div class="container">
 <br>

 <div> 
              <ul class="breadcrumb">
                 <li><a href="#">Искусственный камень</a></li>
                 <li><a href="#">Акриловый камень</a></li>
               <li class="active">>Samsung Staron</li>
             </ul>
             </div>
       <div class="row">

              <div class="col-md-3 col-sm-4 col-xs-6"><div id="logostaron">
                <img src="/images/logostaron.jpg">
              </div></div>
              <div class="col-md-9 col-sm-8 col-xs-6">Искусственный камень Staron пользуется огромной популярностью во всем мире. Он обладает превосходной прочностью и имеет чрезвычайно богатую палитру, представленную многообразием цветов, оттенков и текстур.
                Профессиональные дизайнеры интерьеров предпочитают работать именно с изделиями из акрилового камня Staron, поскольку он поддается термоформингу (детали с изогнутыми элементами изготавливаются из плоского листка материала) и характеризуется богатством цветовой палитры Staron. Возможность разработки конструкции любой сложности без видимых швов также является несомненным преимуществом использования искусственного камня Самсунг Старон.</div>
              </div>
              <br>
              <br>
              <a class="btn btn-default btn-lg btn-block" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                Искусственный камень Samsung Staron
              </a>
            
            <div class="collapse" id="collapseExample1">
              <div class="card card-block">
              <br>
              <br>
                Искусственный камень Staron пользуется огромной популярностью во всем мире. Он обладает превосходной прочностью и имеет чрезвычайно богатую палитру, представленную многообразием цветов, оттенков и текстур.
                Профессиональные дизайнеры интерьеров предпочитают работать именно с изделиями из акрилового камня Staron, поскольку он поддается термоформингу (детали с изогнутыми элементами изготавливаются из плоского листка материала) и характеризуется богатством цветовой палитры Staron. Возможность разработки конструкции любой сложности без видимых швов также является несомненным преимуществом использования искусственного камня Самсунг Старон.
                Все, кто делает выбор в пользу красивого и экологически чистого искусственного камня Samsung Staron, остаются довольны результатом. Широкое распространение материал получил благодаря своим следующим свойствам:
                Бесшовное соединение искусственного камня Самсунг по цене доступной и приемлемой позволяет производить разнообразные по форме поверхности.
                Непористая структура акрилового камня Самсунг Старон гарантирует простой повседневный уход и долговечность конструкций.
                Благодаря кварцевым частицам искусственный камень Старон обладает природной красотой и прочностью. Его эстетика и прекрасные потребительские свойства расширяют дизайнерские возможности при разработке богатых и изысканных интерьеров. Искусственный камень Самсунг используется для изготовления кухонных столешниц Samsung Staron и подоконников, барных стоек, отделки ванных комнат, торгового оборудования и т. д. Не менее привлекательны и мойки Старон, способные привнести в помещение ноту изысканности.
              </div>
            </div>
            <br>
                          <ul class="breadcrumb">
               <li ><a href="#">Solid Color</a></li>
               <li><a href="#">Super Color</a></li>
               <li><a href="#">Sanded</a></li>
               <li class="active">Aspen</a></li>
               <li><a href="#">Metallic</a></li>
               <li><a href="#">Pebble</a></li>
               <li><a href="#">Quarry</a></li>
               <li><a href="#">Tempest</a></li>
               <li><a href="#">Supreme</a></li>
             </ul>
            <p><?= $collection['title']; ?></p>
<br>
<? if($collection['items']): ?>
<div class="row">
    <? foreach($collection['items'] as $collectionItem): ?>
    <div class="col-md-2 col-sm-4 col-xs-6"> 
       <a class="fancyimage-with-title" " rel="group"  title="<?= $page['name'] . ' - ' . $collectionItem['title']; ?>" href="<?= $collectionItem['src']; ?>" data-target-url="artical.php"> 
           <img class="img-responsive border-drop" src="/images/formstone2.png">
               <?= $collectionItem['title']; ?>
           <img class="background-stone" src="<?= $collectionItem['src']; ?>">
        </a>
    </div>
    <? endforeach; ?>
</div>
<? endif; ?>

       </section>