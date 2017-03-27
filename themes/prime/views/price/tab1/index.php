<div class="tab-pane active" id="tab1">
	<? foreach($brands as $brand): ?>
	    <? $this->renderPartial('/price/tab1/brand-price', [
	        'brand' => $brand,
	    ]); ?>
	    <? if($short): ?>
	    	<a href="/price/index">Смотреть все цвета</a>
	    	<? break; ?>
		<? endif; ?>
	<? endforeach; ?>
</div>