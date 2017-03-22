<? $brand = $brands[0]; ?>
<div class="tab-pane active" id="tab1">
   <? foreach($brands as $brand): ?>
    <? $this->renderPartial('tab1/brand-price', [
        'brand' => $brand,
    ]); ?>
<? endforeach; ?>
   
        
   
</div>
