<?php

class CatalogController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionStaron()
	{
		$item = Catalog::getItem('staron');
        $brandModel = Brand::model()->findByAttributes(['name' => 'staron']);
		$this->render('catalog',[
			'page' => $item,
			'collection' => $item['collection'],
            'model' => $brandModel,
		]);
	}

	public function actionLg_hi_macs()
	{
		$item = Catalog::getItem('lg_hi_macs');
  $brandModel = Brand::model()->findByAttributes(['name' => 'lg_hi_macs']);
		$this->render('catalog',[
			'page' => $item,
			'collection' => $item['collection'],
			  'model' => $brandModel,
		]);

	}
	public function actionHanex()
	{
		$item = Catalog::getItem('lg_hi_macs');
  $brandModel = Brand::model()->findByAttributes(['name' => 'hanex']);
		$this->render('catalog',[
			'page' => $item,
			'collection' => $item['collection'],
			  'model' => $brandModel,
		]);

	}
public function actionCorian()
	{
		$item = Catalog::getItem('lg_hi_macs');
  $brandModel = Brand::model()->findByAttributes(['name' => 'corian']);
		$this->render('catalog',[
			'page' => $item,
			'collection' => $item['collection'],
			  'model' => $brandModel,
		]);

	}
	public function actionTristone()
	{
		$item = Catalog::getItem('lg_hi_macs');
  $brandModel = Brand::model()->findByAttributes(['name' => 'tristone']);
		$this->render('catalog',[
			'page' => $item,
			'collection' => $item['collection'],
			  'model' => $brandModel,
		]);

	}
	public function actionGrandex()
	{
		$item = Catalog::getItem('lg_hi_macs');
  $brandModel = Brand::model()->findByAttributes(['name' => 'grandex']);
		$this->render('catalog',[
			'page' => $item,
			'collection' => $item['collection'],
			  'model' => $brandModel,
		]);

	}
public function actionKerrock()
	{
		$item = Catalog::getItem('lg_hi_macs');
  $brandModel = Brand::model()->findByAttributes(['name' => 'kerrock']);
		$this->render('catalog',[
			'page' => $item,
			'collection' => $item['collection'],
			  'model' => $brandModel,
		]);

	}
	public function actionMontelli()
	{
		$item = Catalog::getItem('lg_hi_macs');
  $brandModel = Brand::model()->findByAttributes(['name' => 'montelli']);
		$this->render('catalog',[
			'page' => $item,
			'collection' => $item['collection'],
			  'model' => $brandModel,
		]);

	}
	public function actionGetacore()
	{
		$item = Catalog::getItem('lg_hi_macs');
  $brandModel = Brand::model()->findByAttributes(['name' => 'getacore']);
		$this->render('catalog',[
			'page' => $item,
			'collection' => $item['collection'],
			  'model' => $brandModel,
		]);

	}
	public function actionView($id)
	{
        $stoneModel = Stone::model()->findByPk($id);

        $page = StoneCollection::getItem($id);
		$this->render('stone', [
            'id' => $id,
            'page' => $page,
            'model' => $stoneModel,
        ]);
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}