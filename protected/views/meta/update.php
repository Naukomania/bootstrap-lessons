<?php
/* @var $this MetaController */
/* @var $model Meta */

$this->breadcrumbs=array(
	'Metas'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Meta', 'url'=>array('index')),
	array('label'=>'Create Meta', 'url'=>array('create')),
	array('label'=>'View Meta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Meta', 'url'=>array('admin')),
);
?>

<h1>Update Meta <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>