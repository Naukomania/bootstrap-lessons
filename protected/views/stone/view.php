<?php
/* @var $this StoneController */
/* @var $model Stone */

$this->breadcrumbs=array(
	'Stones'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Stone', 'url'=>array('index')),
	array('label'=>'Create Stone', 'url'=>array('create')),
	array('label'=>'Update Stone', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Stone', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stone', 'url'=>array('admin')),
);
?>

<h1>View Stone #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'image',
		'collection_id',
		'meta_id',
		'description',
	),
)); ?>
