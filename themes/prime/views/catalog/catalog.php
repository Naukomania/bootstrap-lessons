<section id="staron">
    <div class="container">
        <br>
        <? if($this->displayBreadcrumbs): ?>
        <div> 
            <ul class="breadcrumb">
                <li><a href="#">Искусственный камень</a></li>
                <li><a href="#">Акриловый камень</a></li>
                <li class="active"><?=$model->title;?></li>
            </ul>
        </div>
        <? endif; ?>
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-6"><div id="logostaron">
                <img src="/images/<?=$model->image;?>">
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-6"><?=$model->description;?></div>
    </div>
    <br>
    <br>
    <a class="btn btn-default btn-lg btn-block" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
        Искусственный камень <?=$model->title;?>
    </a>

    <div class="collapse" id="collapseExample1">
        <div class="card card-block">
            <br>
            <br>
            <?=$model->descriptionCollEx;?>
        </div>
    </div>
    <br>
    <ul class="breadcrumb collection-chooser">
        <? $breadcrumbs = $model->getCollectionItems($activeCollectionId); ?>
        <? foreach($breadcrumbs as $breadcrumb): ?>
        <li<?if($breadcrumb['active']): ?> class="active"<?endif;?>>
            <a href="<?=$breadcrumb['href'];?>" data-id="<?=$breadcrumb['id'];?>">
                <?=$breadcrumb['name'];?>
            </a>
        </li>
        <? endforeach; ?>
    </ul>

    <div id="collection-content">
        <? 
        $id = empty($breadcrumbs[0]['id']) ? null : $breadcrumbs[0]['id'];
        if ($activeCollectionId) {
            $id = $activeCollectionId;
        }
        $this->renderPartial('/catalog/_collection',[
            'brandModel'      => $model,
            'collection'      => Collection::model()->findByPk($id),
            'collectionItems' => Collection::getItemsForCatalog($id),
        ]); ?>
    </div><!-- end #collection-content -->
</section>