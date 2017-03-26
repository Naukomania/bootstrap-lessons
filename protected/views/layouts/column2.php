<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<style>#admin-content{margin-top:150px;}</style>
<div class="container" id="admin-content">
	<div class="row">
		<div class="col-md-8">
			<?php echo $content; ?>
		</div><!-- content -->
		<div class="col-md-4">
			<hr>
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Действия',
				'htmlOptions'=>array('class' => 'alert alert-info'),
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		</div><!-- sidebar -->
	</div>
</div>

<?php $this->endContent(); ?>