
<section id="katalog-kamnya">
  <div class="container">
    <div id="razdel-content">
      <div id="razdel-main"><h1>Палитра камней, цвета и текстуры</h1></div>
      <br>
      <br>
    </div>
    <div class="tabbable"> <!-- Only required for left/right tabs -->
      <ul class="nav nav-tabs brand-chooser">
        <li class="active"><a href="#tab-item-1" data-name="staron">Samsung Staron</a></li>
        <li><a href="#tab-item-2" data-name="lg_hi_macs">LG Hi Macs</a></li>
        <li><a href="#tab-item-3" data-name="corian">Corian</a></li>
        <li><a href="#tab-item-4" data-name="hanex">Hanex</a></li>
        <li><a href="#tab-item-4" data-name="getacore">GetaCore</a></li>
        <li><a href="#tab-item-5" data-name="tristone">Tristone</a></li>
        <li><a href="#tab-item-6" data-name="grandex">Grandex</a></li>
        <li><a href="#tab-item-7" data-name="kerrock">Kerrock</a></li>
        <li><a href="#tab-item-8" data-name="montelli">Montelli</a></li>
      </ul>
      <div id="brand-tab-content">
        <? $this->renderPartial('/catalog/catalog',[
          'activeCollectionId' => Yii::app()->request->getParam('activeId'),
          'model' => Brand::model()->findByAttributes(['name' => 'staron']),
        ]); ?>
      </div>
    </div>
  </div>
</section>