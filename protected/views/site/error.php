<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h2>Ошибка <?php echo $code; ?></h2>
			<p>
				При попытке запроса произошла ошибка
			</p>
		</div>
	</div>
</div>

<!-- <div class="error">
<?php echo CHtml::encode($message); ?>
</div> -->