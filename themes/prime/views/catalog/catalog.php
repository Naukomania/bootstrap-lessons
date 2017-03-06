<section id="staron">
 <div class="container">
 <br>

 <div> 
              <ul class="breadcrumb">
                 <li><a href="#">Искусственный камень</a></li>
                 <li><a href="#">Акриловый камень</a></li>
               <li class="active"><?=$page['name'];?></li>
             </ul>
             </div>
       <div class="row">

              <div class="col-md-3 col-sm-4 col-xs-6"><div id="logostaron">
                <img src="/images/<?=$model->image;?>">
              </div></div>
              <div class="col-md-9 col-sm-8 col-xs-6"><?=$model->description;?></div>
              </div>
              <br>
              <br>
              <a class="btn btn-default btn-lg btn-block" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
               <?=$page['descriptionCollName'];?>
              </a>
            
            <div class="collapse" id="collapseExample1">
              <div class="card card-block">
              <br>
              <br>
                 <?=$page['descriptionCollEx'];?>
              </div>
            </div>
            <br>
                         <ul class="breadcrumb">
    <? $breadcrumbs = $model ? $model->getCollectionItems(): $page['breadcrumbs']; ?>
    <? foreach($breadcrumbs as $breadcrumb): ?>
        <li<?if(!empty($breadcrumb['active'])): ?> class="active"<?endif;?>>
            <a href="<?=$breadcrumb['href'];?>">
                <?=$breadcrumb['name'];?>
            </a>
        </li>
    <? endforeach; ?>
</ul>




            <p><?= $collection['title']; ?></p>
<br>
<?
$collectionItems = [];
if (!empty($breadcrumbs[0]['id'])) {
  $collectionItems = Collection::getItemsForCatalog($breadcrumbs[0]['id']);
}
if (!$collectionItems && $collection['items']) {
  $collectionItems = $collection['items'];
}
?>

<? if($collectionItems): ?>
<div class="row">
    <? foreach($collectionItems as $collectionItem): ?>
    <div class="col-md-2 col-sm-4 col-xs-6"> 
    <a class="fancyimage-with-title" " rel="group"  title="<?= $page['name'] . ' - ' . $collectionItem['title']; ?>" href="<?= $collectionItem['src']; ?>" data-target-url="<?= $collectionItem['href']; ?>"> 
           <img class="img-responsive border-drop" src="/images/formstone2.png">
               <?= $collectionItem['title']; ?>
           <img class="background-stone" src="<?= $collectionItem['src']; ?>">
        </a>
    </div>
    <? endforeach; ?>
</div>
<? endif; ?>

       </section>
       
<? if($model): ?>
<div class="container">
  <pre>
    <? print_r($model->attributes); ?>
  </pre>
</div>
<? endif; ?>