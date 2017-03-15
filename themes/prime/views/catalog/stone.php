<?= $id; ?> 
<section id="artical">
 <div class="container">
 <br>

 <div> 
              <ul class="breadcrumb">
                 <li><a href="#">Искусственный камень</a></li>
                 <li><a href="#">Акриловый камень</a></li>
               <li><a href="/catalog/<?= $model->collection->brand->name;?>"><?= $model->collection->brand->title;?></a></li>
                 <li><a href="/catalog/<?= $model->collection->brand->name;?>"><?= $model->collection->name;?></a></li>
               <li class="active"><?= $model->name; ?></li>
             </ul>
             </div>
       <div class="row">
       <div class="col-md-4 col-sm-6 col-xs-6"> 
       <a href="#">
        <img src="/images/<?= $model->collection->brand->image; ?>"></a>
        <a class="fancyimage" title="<?= $model->collection->brand->title;?> <?= $model->name; ?> " href="<?= $model->image; ?>">
       <img class="img-responsive" <img src="<?= $model->image; ?>"></a>
       </div>
       <div class="col-md-8 col-sm-6 col-xs-6"> 
         <h2><?= $model->collection->brand->title;?>&nbsp<?= $model->name; ?></h2>

       <p> Производство:<?=$model->collection->brand->countryName();?></p>
        <p>
       Цена: <?= $model->collection->price;?> руб
       </p>
         <p>
       Коллекция: <?= $model->collection->name;?>
       </p>
       <p>
       Цвет: <?= $model->name; ?>
       </p>
       <p>
       Тон: <?= $model->toneName(); ?></p>
       <p>
       Текстура: <?= $model->textureName(); ?></p>
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
        <? if($model->products): ?>
  <div class="row">
   <? foreach($model->products as $product): ?>
      <div class="col-md-3 col-sm-4 col-xs-6 thumb">
        <br>
         <div class="kamen">
       <a class="fancyimage" rel="group" href="<?= $product->image; ?>">
<img class="img-responsive" src="<?= $product->image; ?>">
<div class="infokamen"><?= $product->title; ?></div>
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
 <? foreach($model->products as $product): ?>
  <? print_r($product->attributes); ?>
 <? endforeach; ?>
  </pre>
</div>
<? endif; ?>