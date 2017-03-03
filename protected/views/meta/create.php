<?php
/* @var $this MetaController */
/* @var $model Meta */

$this->breadcrumbs=array(
	'Metas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Meta', 'url'=>array('index')),
	array('label'=>'Manage Meta', 'url'=>array('admin')),
);
?>

<h1>Create Meta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>