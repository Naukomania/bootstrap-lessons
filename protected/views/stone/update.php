<?php
/* @var $this StoneController */
/* @var $model Stone */

$this->breadcrumbs=array(
	'Stones'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stone', 'url'=>array('index')),
	array('label'=>'Create Stone', 'url'=>array('create')),
	array('label'=>'View Stone', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Stone', 'url'=>array('admin')),
);
?>

<h1>Update Stone <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>