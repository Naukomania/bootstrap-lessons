<section id="gallery">
    <div class="container">
        <div id="razdel-main">
            <h1>Фото изделий из искусственного камня</h1>
            <div class="tabbable">
                <!-- Only required for left/right tabs -->
                <ul class="nav nav-tabs">
                    <li<? if($activeTab == 1): ?> class="active"<? endif; ?>><a href="#gallery-tab1" data-toggle="tab">Столешницы из искусственного камня кухня</a></li>
                    <li<? if($activeTab == 2): ?> class="active"<? endif; ?>><a href="#gallery-tab2" data-toggle="tab">Столешницы в ванную комнату</a></li>
                    <li<? if($activeTab == 3): ?> class="active"<? endif; ?>><a href="#gallery-tab3" data-toggle="tab">Подоконники</a></li>
                    <li<? if($activeTab == 4): ?> class="active"<? endif; ?>><a href="#gallery-tab4" data-toggle="tab">Коммерческие изделия</a></li>
                    <li<? if($activeTab == 5): ?> class="active"<? endif; ?>><a href="#gallery-tab5" data-toggle="tab">Прочее</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane<? if($activeTab == 1): ?> active<? endif; ?>" id="gallery-tab1">
                        <div class="row ajax-foto-wrapper">
                            <? $this->renderPartial('/site/home/gallery/kitchen/page1'); ?>
                        </div>
                    </div>
                    <div class="tab-pane<? if($activeTab == 2): ?> active<? endif; ?>" id="gallery-tab2">
                        <div class="row ajax-foto-wrapper-bacth">
                             <? $this->renderPartial('/site/home/gallery/bacth/page1'); ?>
                        </div>
                    </div>
                    <div class="tab-pane<? if($activeTab == 3): ?> active<? endif; ?>" id="gallery-tab3">
                        <div class="row ajax-foto-wrapper-podok">
                             <? $this->renderPartial('/site/home/gallery/podok/page1'); ?>
                        </div>
                    </div>
                    <div class="tab-pane<? if($activeTab == 4): ?> active<? endif; ?>" id="gallery-tab4">
                        <div class="row ajax-foto-wrapper-commerce">
                             <? $this->renderPartial('/site/home/gallery/commerce/page1'); ?>
                        </div>
                    </div>
                    <div class="tab-pane<? if($activeTab == 5): ?> active<? endif; ?>" id="gallery-tab5">
                        <div class="row ajax-foto-wrapper-different">
                             <? $this->renderPartial('/site/home/gallery/different/page1'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
