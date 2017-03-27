<?php
/* @var $this PriceController */
/* @var $brands array of Brand */
$this->pageTitle = 'Цены на изделия из кварцевого камня камня - Прайм-Стоун';

$this->breadcrumbs=array(
    'Price',
    );
    ?>
    <div id="quartz">
        <div class="container">
            <br>
            <ul class="breadcrumb">
                <li><a href="#">Прайм-Стоун</a></li>
                <li class="active"><a href="#">Цены на изделия из искусственного камня (кварц)</a></li>
            </ul>

            <div class="zagolovok">
                <h1>Цены на изделия из искусственного кварцевого камня </h1>
            </div>	
            <div class="text-site">Стоимость изделий из кварцевого камня несколько отличны, по расчету от стоимости изделий из акрила. Если стоимость изделий из акриловго камня слагается из стоимости материала за м.кв + услуги по изготовлению, то затраты на материал по кварцевому камню считается слэбами или половинкой слэба. Размер слэба 3000 х 1400 мм, половинка, соответственно 3000 х 700 мм. В данном прайсе даны цены на слэбы в зависимости от бренда, толщины и коллекции камня. К стоимости также суммируются работы по изготовлению изделия, стоимости моделей кромок и пристеночных бортиков. Также здесь приводятся примеры стоимости заказов. 
                <br>
            </div>
          
             <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Цены на камень</a></li>
                    <li><a href="#tab2" data-toggle="tab">Стоимость изготовления</a></li>
                    <li><a href="#tab3" data-toggle="tab">Кромки и бортики</a></li>
                    <li><a href="#tab4" data-toggle="tab">Услуги</a></li>
                    <li><a href="#tab5" data-toggle="tab">Пример расчета</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab1">
                  <div class="row">
                            <div class="title-price-stone"><a href="/catalog/radianz"><img src="/images/price/samsung-radianz-logo-mini.jpg">Стоимость кварцевого камня Samsung Radianz</a></div>
                     <!--  Закрытие тега row  -->
                    </div>
                     <div class="price-container">
                     <div class="row">
                                    <div class="col-md-12">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                    <th>Коллекция</th>
                                                    <th>Размеры слэба, мм</th>
                                                    <th>Толщина</th>
                                                    <th><i class="fa fa-rub fa-2x"></i>за слэб</th>
                                                </tr>
                                           </thead>
                                           <tbody>
                                                <tr>
                                                    <td><div class="btn-group">
                                                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Выбрать коллекцию <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Группа G1</a></li>
                                                            <li><a href="#"> Группа G2</a></li>
                                                            <li><a href="#"> Группа G3</a></li>
                                                            <li><a href="#"> Группа G4</a></li>
                                                            <li><a href="#"> Группа G5</a></li> 
                                                        </ul>
                                                    </div></td>
                                                    <td><div class="btn-group">
                                                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Выбрать размер слэба <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">3000 х 1400 мм</a></li>
                                                            <li><a href="#"> 3000 х 700 мм</a></li>
                                                        </ul>
                                                    </div></td>
                                                    <td><div class="btn-group">
                                                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Выбрать толщину слэба <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">12 мм</a></li>
                                                            <li><a href="#">20 мм</a></li>
                                                            <li><a href="#">30 мм</a></li>
                                                        </ul>
                                                    </div></td>
                                                    <td>0</td>
                                                </tr>
                                            </tbody>
                                      </table>
                                <!--  Закрытие тега col-md-12  -->
                                    </div>
                      <!--  Закрытие тега row  -->                      
                                    </div>
                      <!--  Закрытие тега price-container  -->
                     </div>
                   <!--  Закрытие тега tab1  -->
                  </div>

                   <div class="tab-pan" id="tab2">
                   <div class="row">
    <div class="title-price-stone">Стоимость работ по изготовлению изделий из кварца</div>
  </div>
  <div class="price-container">
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th>Услуга</th>
              <th>Ед изм</th>
              <th><i class="fa fa-rub fa-2x"></i></th>

            </tr>
          </thead>
          <tbody>
            <tr class="itogo">
              <td>Изготовление столешницы - прямой сегмент</td>
              <td>м.кв</td>
              <td> 0*</td>

            </tr>
            <tr class="itogo">
              <td >Изготовление углового элемента h 20/30 мм, р-р 900х900/1050х1050мм</td>
              <td>шт</td>
              <td>7000</td>

            </tr>
             <tr class="itogo">
              <td >Изготовление углового элемента h 40/100 мм, р-р 900х900/1050х1050мм</td>
              <td>шт</td>
              <td>11000</td>

            </tr>
            <tr class="itogo">
              <td >Стык столешницы прямой (600 мм)</td>
              <td>шт</td>
              <td>2500</td>

            </tr>
             <tr class="itogo">
              <td >Стык столешницы еврозапил (600 мм)</td>
              <td>шт</td>
              <td>4000</td>

            </tr>
            <tr class="itogo">
              <td>Монтаж изделия более 1,8 м.кв</td>
              <td>1 раз</td>
              <td>Без доплат</td>

            </tr>
            <tr class="itogo">
              <td>Монтаж изделия менее 1,8 м.кв</td>
              <td>1 раз</td>
              <td>2500</td>
            </tr>
            <tr class="itogo">
              <td>Доп работы по просьбе клиента на монтаже не предусмотренные договором</td>
              <td>1 час</td>
              <td>1200</td>
            </tr>
            <tr class="itogo">
              <td>Полировка полуглянец (стандарт)</td>
              <td>м.п.</td>
              <td>Без доплат</td>
            </tr>
            <tr class="itogo">
              <td>Полировка глянец</td>
              <td>м.п.</td>
              <td>1500</td>
            </tr>
            <tr class="itogo">
              <td>Вырезы под накладную мойку, варочную поверхность, смеситель</td>
              <td>шт</td>
              <td>Без доплат</td>
            </tr>
            <tr class="itogo">
              <td>Монтаж накладной мойки  / раковины заказчика</td>
              <td>шт</td>
              <td>1000</td>
            </tr>
            <tr class="itogo">
              <td>Подклейка мойки / раковины под столешницу (не интегрированная, т.е. не наша, не акриловая)</td>
              <td>шт</td>
              <td>2000</td>
            </tr>
            <tr class="itogo">
              <td>Притопление мойки / варочной поверхности</td>
              <td>шт</td>
              <td>5000</td>
            </tr>
            <tr class="itogo">
              <td>Притопленное крыло для мойки - из искусственного камня</td>
              <td>шт</td>
              <td>15000</td>
            </tr>
            <tr class="itogo">
              <td>Проточки для стока воды  / под циркуляцию воздуха</td>
              <td>шт / м.п.</td>
              <td>500</td>
            </tr>
            <tr class="itogo">
              <td>Криволинейный вырез / под шаблон</td>
              <td>шт</td>
              <td>500</td>
            </tr>
            <tr class="itogo">
              <td>Сплошная подложка из фанеры (требуется для изделий типа барных стоек с монтажом  без мебели, столешниц для столов</td>
              <td>м.кв</td>
              <td>1000</td>
            </tr>
            <tr class="itogo">
              <td>Изготовление жесткой упаковки из фанеры (требуется только для отправки изделий в другие регионы)</td>
              <td>м.кв</td>
              <td>2500</td>
            </tr>
            <tr class="itogo">
              <td>Радиусная кромка / термоформинг</td>
              <td>шт / м.п.</td>
              <td>1500</td>
            </tr>
            <tr class="itogo">
              <td>Скорс кромки под углом</td>
              <td>шт</td>
              <td>1000</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
                    <!--  Закрытие тега tab2  -->
                   </div>
                   

                 <!--  Закрытие тега tab-content  -->
             </div>



                 
             

            <!-- Закрытие тега Quartz и container  -->
        </div>
    </div>




               


 

