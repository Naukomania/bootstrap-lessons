<?php
/* @var $this StoneController */
/* @var $model Stone */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stone-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'collection_id'); ?>
		<?php echo $form->dropDownList($model, 'collection_id', Collection::getList()); ?>
		<?php echo $form->error($model,'collection_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_id'); ?>
		<?php echo $form->textField($model,'meta_id'); ?>
		<?php echo $form->error($model,'meta_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'texture'); ?>
		<?php echo $form->dropDownList($model, 'texture', Stone::getTextureList()); ?>
		<?php echo $form->error($model,'texture'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tone'); ?>
		<?php echo $form->dropDownList($model, 'tone', Stone::getToneList()); ?>
		<?php echo $form->error($model,'tone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model, 'status', Stone::getStatusList()); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->