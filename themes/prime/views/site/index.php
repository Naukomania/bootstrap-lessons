<?php
$page = [
    'title' => 'Прайм-Стоун - столешницы, подоконники и другие изделия из искусственного камня',
    'keywords' => 'изделия из искусственного камня, столешницы из искусственного камня, изготовление изделий из искусственного камня, подоконники из искусственного камня, столешницы для ванной из искусственного камня, столешницы для санузлов из искусственного камня, изделия для лестниц из искусственного камня',
    'description' => 'Прайм-Стоун - производство изделий из искусственного камня на заказ - столешницы для ванной, кухни,  санузлов. Производим перила и ступени для лестниц, подоконники и многие другие изделия.',
  ];
?>
<div id="main-page">
<?
$this->renderPartial('left-menu');
$this->renderPartial('home/slider');
$this->renderPartial('home/services');
$this->renderPartial('home/catalog');
$this->renderPartial('home/gallery', ['activeTab' => 1]);
$this->renderPartial('/price/index', ['brands'=>$brands,'short' => true]);
$this->renderPartial('home/map');
?>
</div>
<?php $this->pageTitle=Yii::app()->name; ?>