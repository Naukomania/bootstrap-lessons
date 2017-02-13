<section id="artical">
 <div class="container">
 <br>

 <div> 
              <ul class="breadcrumb">
                 <li><a href="#">Искусственный камень</a></li>
                 <li><a href="#">Акриловый камень</a></li>
               <li><a href="#">Samsung Staron</a></li>
               <li class="active"><?= $page['title']; ?></li>
             </ul>
             </div>
       <div class="row">
       <div class="col-md-4 col-sm-6 col-xs-6"> 
       <a href="#">
        <img src="<?= $page['logostaron']; ?>"></a>
        <a class="fancyimage" title="Samsung Staron FR148 Shimmer / Radiance" href="<?= $page['image']; ?>">
       <img class="img-responsive" <img src="<?= $page['imagebig']; ?>"></a>
       </div>
       <div class="col-md-8 col-sm-6 col-xs-6"> 
         <h2>Samsung Staron&nbsp<?= $page['title']; ?></h2>
         <p>
       Коллекция: Tempest (темпест) -   текстура с крупными вкраплениями. Ю.Корея
       </p>
       <p>
       Цвет: FR148 Radiance (Shimmer) (радианс, шимер)
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
            <div class="infokamen"> </div>
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
        <? if($page['additional_images']): ?>
  <div class="row">
    <? foreach($page['additional_images'] as $additionalImage): ?>
      <div class="col-md-3 col-sm-4 col-xs-6 thumb">
        <br>
        <a class="fancyimage" rel="group" href="<?= $additionalImage['src']; ?>">
          <img class="img-responsive" src="<?= $additionalImage['src']; ?>">
        </a>
      </div>
    <? endforeach; ?>
  </div>
<? endif; ?> 
       </div>
      </div>
       </section>