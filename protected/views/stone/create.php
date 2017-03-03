<?php
/* @var $this StoneController */
/* @var $model Stone */

$this->breadcrumbs=array(
	'Stones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stone', 'url'=>array('index')),
	array('label'=>'Manage Stone', 'url'=>array('admin')),
);
?>

<h1>Create Stone</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>