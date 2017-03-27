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
              <td >Стык столешницы (600 мм)</td>
              <td>шт</td>
              <td>2500</td>

            </tr>

            </tr>
            <tr class="itogo">
              <td>Полировка торца столешницы 20/30 мм</td>
              <td>м.п.</td>
              <td>3000</td>

            </tr>
            <tr class="itogo">
              <td>Полировка торца столешницы h 40 мм и более 40 мм</td>
              <td>м.п.</td>
              <td>3800</td>

            </tr>
            <tr class="itogo">
              <td>Радиусный рез 20/30 мм</td>
              <td>м.п.</td>
              <td>2500</td>

            </tr>
            <tr class="itogo">
              <td>Радиусный рез 40 мм и более</td>
              <td>м.п.</td>
              <td>3500</td>

            </tr>
             <tr class="itogo">
              <td>Вырез прямоугольный (под мойку или варочную поверхность) без полировки (монтаж сверху)</td>
              <td>шт</td>
              <td>3500</td>

            </tr>
              <tr class="itogo">
              <td>Вырез круглый/ овальный (под мойку или варочную поверхность) без полировки (монтаж сверху)</td>
              <td>шт</td>
              <td>4500</td>

            </tr>
             <tr class="itogo">
              <td>Прямоугольный/ круглый/овальный вырез (под мойку или варочную поверхность)с полировкой (монтаж снизу или в уровень)</td>
              <td>шт</td>
              <td>6500</td>

            </tr>
            
           
           

            <tr class="itogo">
              <td>Технический вырез  (под трубы, технические короба, углы стен)</td>
              <td>м.п</td>
              <td>2200</td>
            </tr>
            <tr class="itogo">
              <td>Отверстия под смеситель, фильтр, розетки и т.д.</td>
              <td>шт</td>
              <td>750</td>
            </tr>
            <tr class="itogo">
              <td>Изготовление пристеночного бортика / плинтуса h до 60 мм</td>
              <td>м.п.</td>
              <td>1500</td>
            </tr>
            <tr class="itogo">
              <td>Изготовление стеновой панели</td>
              <td>м.кв</td>
              <td>3500</td>
            </tr>
            <tr class="itogo">
              <td>Полировка торца стеновой панели</td>
              <td>м.п.</td>
              <td>1200</td>
            </tr>
            <tr class="itogo">
              <td>Монтаж мойки</td>
              <td>шт</td>
              <td>2000</td>
            </tr>
            
            <tr class="itogo">
              <td>Проточки для стока воды  / под циркуляцию воздуха</td>
              <td> шт</td>
              <td>1100</td>
            </tr>
           
            
             
            <tr class="itogo">
              <td>Изготовление жесткой упаковки из фанеры (требуется только для отправки изделий в другие регионы)</td>
              <td>м.кв</td>
              <td>2500</td>
            </tr>
            
            <tr class="itogo">
              <td>Скорс кромки под углом</td>
              <td>шт</td>
              <td>1500</td>
            </tr>
            <tr class="itogo">
              <td>Криволинейная кромка (только для камня 30мм)</td>
              <td>м.п</td>
              <td>6000</td>
            </tr>
             <tr class="itogo">
              <td>Монтаж столешницы/стеновой панели</td>
              <td>м.п</td>
              <td>1500</td>
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




               


 

