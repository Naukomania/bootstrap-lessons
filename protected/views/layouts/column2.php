<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<style>#admin-content{margin-top:150px;}</style>
<div class="container" id="admin-content">
	<div class="row">
		<div class="col-md-8">
			<?php echo $content; ?>
		</div><!-- content -->
		<div class="col-md-4">
		<?php
			$this->widget('zii.widgets.CMenu', array(
				'items'=>array(
					array('label'=>'Бренды', 'url'=>array('/brand/index')),
					array('label'=>'Коллекции', 'url'=>array('/collection/index')),
					array('label'=>'Камни', 'url'=>array('/stone/index')),
				),
				'htmlOptions'=>array('class'=>'admin-menu'),
			));
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
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