<?= $id; ?> 
<section id="artical">
 <div class="container">
 <br>

 <div> 
              <ul class="breadcrumb">
                 <li><a href="#">Искусственный камень</a></li>
                 <li><a href="#">Акриловый камень</a></li>
               <li><a href="#"><?= $model->collection->brand->name;?></a></li>
               <li class="active"><?= $model->name; ?></li>
             </ul>
             </div>
       <div class="row">
       <div class="col-md-4 col-sm-6 col-xs-6"> 
       <a href="#">
        <img src="/images/<?= $model->collection->brand->image; ?>"></a>
        <a class="fancyimage" title="<?= $model->collection->brand->name;?> <?= $model->name; ?> " href="<?= $model->image; ?>">
       <img class="img-responsive" <img src="<?= $model->image; ?>"></a>
       </div>
       <div class="col-md-8 col-sm-6 col-xs-6"> 
         <h2><?= $model->collection->brand->name;?>&nbsp<?= $model->name; ?></h2>

         <p>
       Коллекция: <?= $model->collection->name;?>
       </p>
       <p>
       Цвет: <?= $model->name; ?>
       </p>
       <p>
       Рекомендуемая полировка: глянец / полуглянец
       </p>
       <p>
       Аналогичные / похожие цвета  других производителей:
       </p>
        <? if($page['additional_images']): ?>
        
  <div class="row">
 
     <? foreach($page['additional_images'] as $additionalImage): ?>
      <div class="col-md-3 col-sm-4 col-xs-6 thumb">
        <br>
         <div class="kamen">
        <a class="fancyimage" rel="group" href="<?= $additionalImage['src']; ?>">
          <img class="img-responsive" src="<?= $additionalImage['src']; ?>">
            <div class="infokamen"><?= $additionalImage['description']; ?></div>
        </a>
      </div>
    </div>
<? endforeach; ?>

  </div>
<? endif; ?> 
       </div>
       <div class="gallery-kamen">
       <br>
       <div><h3>Фото столешницы из искусственного камня FR148 Shimmer / Radiance</h3></div>
        <? if($page['top_stone']): ?>
  <div class="row">
    <? foreach($page['top_stone'] as $topStoneImage): ?>
      <div class="col-md-3 col-sm-4 col-xs-6 thumb">
        <br>
         <div class="kamen">
        <a class="fancyimage" rel="group" href="<?= $topStoneImage['src']; ?>">
          <img class="img-responsive" src="<?= $topStoneImage['src']; ?>">
            <div class="infokamen"><?= $topStoneImage['description']; ?></div>
        </a>
      </div>
    </div>
<? endforeach; ?>
  </div>
<? endif; ?> 
       </div>
      </div>
       </section>

<? if($model): ?>
<div class="container">
  <pre>
    <? print_r($model->attributes); ?>
  </pre>
</div>
<? endif; ?>