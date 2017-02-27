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
                <img src="<?=$page['logoSrc'];?>">
              </div></div>
              <div class="col-md-9 col-sm-8 col-xs-6"><?=$page['descriptionText'];?></div>
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
    <? $breadcrumbs = $page['breadcrumbs']; ?>
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
<? if($collection['items']): ?>
<div class="row">
    <? foreach($collection['items'] as $collectionItem): ?>
    <div class="col-md-2 col-sm-4 col-xs-6"> 
       <a class="fancyimage-with-title" " rel="group"  title="<?= $page['name'] . ' - ' . $collectionItem['title']; ?>" href="<?= $collectionItem['src']; ?>" data-target-url="artical.php"> 
           <img class="img-responsive border-drop" src="/images/formstone2.png">
               <?= $collectionItem['title']; ?>
           <img class="background-stone" src="<?= $collectionItem['src']; ?>">
        </a>
    </div>
    <? endforeach; ?>
</div>
<? endif; ?>

       </section>
       