<section id="hi-macs">
 <div class="container">
 <br>

 <div> 
              <ul class="breadcrumb">
                 <li><a href="#">Искусственный камень</a></li>
                 <li><a href="#">Акриловый камень</a></li>
               <li class="active">LG Hi Macs</li>
             </ul>
             </div>
       <div class="row">

              <div class="col-md-3 col-sm-4 col-xs-6"><div id="logolg">
                <img src="<?=$page['logoSrc'];?>">
              </div></div>
              <div class="col-md-9 col-sm-8 col-xs-6">Искусственный камень LG пользуется огромной популярностью во всем мире. Он обладает превосходной прочностью и имеет чрезвычайно богатую палитру, представленную многообразием цветов, оттенков и текстур.
                Профессиональные дизайнеры интерьеров предпочитают работать именно с изделиями из акрилового камня Staron, поскольку он под   LG LG LG LG LG LG LG  LG LG LG LG LG LG LG  LG LG LG LG LG LG LG  LG LG LG LG LG LG LG.</div>
              </div>
              <br>
              <br>
              <a class="btn btn-default btn-lg btn-block" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                Искусственный камень LG Hi Macs
              </a>
            
            <div class="collapse" id="collapseExample1">
              <div class="card card-block">
              <br>
              <br>
                 LG LG LG LG LG LG LG LG LG LG LG LG LG LG  LG LG LG LG LG LG LG  LG LG LG LG LG LG LG  LG LG LG LG LG LG LG  LG LG LG LG LG LG LG  LG LG LG LG LG LG LG  LG LG LG LG LG LG LG  LG LG LG LG LG LG LG  LG LG LG LG LG LG LG  LG LG LG LG LG LG LG
              </div>
            </div>
            <br>
                          <ul class="breadcrumb">
               <li ><a href="#">Solid</a></li>
               <li><a href="#">Sand&Pearl</a></li>
               <li><a href="#">Quartz&Granit</a></li>
               <li >><a href="#">Lusent</a></li>
               <li><a href="#">Sparkle&Volcanics</a></li>
               <li><a href="#">Galaxy</a></li>
               <li class="active">Marmo</li>
             </ul>
            <p><?= $collection['title']; ?></p>
<br>
<? if($collection['items']): ?>
<div class="row">
    <? foreach($collection['items'] as $collectionItem): ?>
    <div class="col-md-2 col-sm-4 col-xs-6"> 
       <a class="fancyimage-with-title" " rel="group"  title="<?= $page['name'] . ' - ' . $collectionItem['title']; ?>" href="<?= $collectionItem['src']; ?>" data-target-url="artical.php"> 
           <img class="img-responsive border-drop" src="images/formstone2.png">
               <?= $collectionItem['title']; ?>
           <img class="background-stone" src="<?= $collectionItem['src']; ?>">
        </a>
    </div>
    <? endforeach; ?>
</div>
<? endif; ?>

       </section>