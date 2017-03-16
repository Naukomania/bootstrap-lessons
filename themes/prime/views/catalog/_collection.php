<p><?= $collection->name; ?></p>
<br>
<? if($collectionItems): ?>
<div class="row">
    <? foreach($collectionItems as $collectionItem): ?>
    <div class="col-md-2 col-sm-4 col-xs-6"> 
    <a class="fancyimage-with-title" " rel="group"  title="<?= $brandModel->title . ' - ' . $collectionItem['title']; ?>" href="<?= $collectionItem['src']; ?>" data-target-url="<?= $collectionItem['href']; ?>"> 
           <img class="img-responsive border-drop" src="/images/formstone2.png">
           <div class="stone-name">
               <?= $collectionItem['title']; ?></div>
           <img class="background-stone" src="<?= $collectionItem['src']; ?>">
        </a>
    </div>
    <? endforeach; ?>
</div>
<? endif; ?>