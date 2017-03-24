<?php $this->pageTitle=Yii::app()->name; ?>

<?php
$page = [
    'title' => 'Прайм-Стоун - столешницы и подоконники из искусственного камня',
    'keywords' => 'Производство изделий из искусственного камня, столешницы из искусственного камня, изготовление изделий из искусственного камня, подоконники из искусственного камня, столешницы для ванной из искусственного камня, столешницы для санузлов из искусственного камня, изделия для лестниц из искусственного камня',
    'description' => 'Производство изделий из искусственного камня - столешницы, изделия для лестницы, подоконники и многие другие изделия.',
  ];
$this->renderPartial('left-menu');
$this->renderPartial('home/slider');
$this->renderPartial('home/services');
$this->renderPartial('home/catalog');
$this->renderPartial('home/gallery');
$this->renderPartial('/price/index', ['brands'=>$brands]);
$this->renderPartial('home/map');
?>