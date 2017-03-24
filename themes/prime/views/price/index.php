<?php
/* @var $this PriceController */
/* @var $brands array of Brand */
$this->pageTitle = 'Цены на изделия из искусственного камня - Прайм-Стоун';

$this->breadcrumbs=array(
	'Price',
);
?>
<div id="price">
        <div class="container-fluid">
        <br>
        <ul class="breadcrumb">
                         <li><a href="#">Прайм-Стоун</a></li>
                         <li class="active"><a href="#">Цены на изделия из искусственного камня (акрил)</a></li>
        </ul>
        </div>
         <div class="zagolovok">
        <h1>Цены на изделия из искусственного камня</h1>
        </div>	
        <div class="text-site">По прайсу, который находится ниже можно самостоятельно прикинуть стоимость изделия из искусственного камня.  Стоимость заказа складывается из стоимости материала (вкладка "цена камня"), стоимости услуг  по изготовлению, от типа кромок и бортиков, наличия в заказе мойки или раковины, дальности монтажа и замера. Здесь даны все исходные данные по которым мы сами делаем расчет, но во избежания недоразумений, лучше дополнительно воспользоваться расчетом нашего специалиста. Мы с удовольствием сделаем вам точный расчет по стоимости заказа от замера до монтажа.
                <details>
                 <summary>Читать далее</summary>
                 <p>Цены на столешницы из искусственного камня зависят от бренда камня и от текстуры камня.</p>

                <p>Наиболее оптимальными  ценa качество, на сегодняшний момент, являются столешницы из камня корейского производства.</p>

                <p>Внутри бренда искусственный камень также разнится по цене. Поэтому существуют коллекции. Связано это с тем, что себестоимость камня зависит от текстуры камня. Например монотонные светлые тона дешевле, чем камни с крупными вкраплениями.</p>

                <p>Мелкая, песчаная текстура камня дешевле средней и крупной.</p>

                 <p>Текстура камня на не влияет на качество  качество.</p>

                <p>Надо обратить внимание, что монотонные яркие и темные столешницы в отличие от пестрых светлых - не рекомендуются производителями искусственного камня применять для изготовления кухонных столешниц. Т.к. они не являются износостойкими.</p>

                <p>Дело в том, что если намеренно или нечаяно поцарапать акриловую столешницу остается белая тонкая полоска - акрил. Полоска  похожа  на царапину в лакированной мебели. Можно конечно заказать выезд специалиста и перешлифовать все изделие и столешница будет как новая.</p>

                <p>Только знайте, что затраты будут регулярными. По мере использования столешницы от 1-го раза в два- три года  до 1 раза в год.</p>

                <p>Средняя стоимость шлифования в Москве - 1500 рублей за метр погонный.</p>
                 </details>
                </div>


	<div class="tabbable tabble-pere"> <!-- Only required for left/right tabs -->
	      <ul class="nav nav-tabs">
	        <li class="active"><a href="#tab1" data-toggle="tab">Цены на камень</a></li>
	        <li><a href="#tab2" data-toggle="tab">Стоимость изготовления</a></li>
	        <li><a href="#tab3" data-toggle="tab">Кромки и бортики</a></li>
	        <li><a href="#tab4" data-toggle="tab">Мойки для кухни</a></li>
	        <li><a href="#tab5" data-toggle="tab">Раковины для ванной</a></li>
	        <li><a href="#tab6" data-toggle="tab">Услуги</a></li>
	        <li><a href="#tab7" data-toggle="tab">Доп. аксессуары</a></li>
  	      </ul>
  	      <br>
       		<div class="tab-content">
		<? $this->renderPartial('tab1/index', [
            'brands' => $brands,
        ]); ?>
                     <? $this->renderPartial('tab2/index'); ?>
                     <? $this->renderPartial('tab3/index'); ?>
                     <? $this->renderPartial('tab4/index'); ?>
                     <? $this->renderPartial('tab5/index'); ?>
                     <? $this->renderPartial('tab6/index'); ?>
                      <? $this->renderPartial('tab7/index'); ?>
		     
        </div>      
 
