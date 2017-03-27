<?php

class CatalogController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionStaron()
	{
		$this->catalogView('staron');
	}
	public function actionLg_hi_macs()
	{
		$this->catalogView('lg_hi_macs');
	}
	public function actionHanex()
	{
		$this->catalogView('hanex');
	}
	public function actionCorian()
	{
		$this->catalogView('corian');
	}
	public function actionTristone()
	{
		$this->catalogView('tristone');
	}
	public function actionGrandex()
	{
		$this->catalogView('grandex');
	}
	public function actionKerrock()
	{
		$this->catalogView('kerrock');
	}
	public function actionMontelli()
	{
		$this->catalogView('montelli');
	}
	public function actionGetacore()
	{
		$this->catalogView('getacore');
	}
	public function actionRadianz()
	{
		$this->catalogView('radianz');
	}


	private function catalogView($brandName)
	{
		$model = Brand::model()->findByAttributes(['name' => $brandName]);
		if ($model->type == Brand::ACRYLIC_TYPE) {
			$this->activeLink = self::ACRYLIC_LINK;
		} elseif ($model->type == Brand::QUARTZ_TYPE) {
			$this->activeLink = self::QUARTZ_LINK;
		}
		$this->render('catalog',[
			'activeCollectionId' => Yii::app()->request->getParam('activeId'),
			'model' => $model,
		]);
	}

	public function actionView($id)
	{
        $stoneModel = Stone::model()->findByPk($id);
        if ($stoneModel->collection->brand->type == Brand::ACRYLIC_TYPE) {
			$this->activeLink = self::ACRYLIC_LINK;
		} elseif ($stoneModel->collection->brand->type == Brand::QUARTZ_TYPE) {
			$this->activeLink = self::QUARTZ_LINK;
		}

        $page = StoneCollection::getItem($id);
		$this->render('stone', [
            'id' => $id,
            'page' => $page,
            'model' => $stoneModel,
        ]);
	}

	public function actionAjaxcollection($id)
	{
		$collection = Collection::model()->findByPk($id);
		$collectionItems = Collection::getItemsForCatalog($collection->id);
		$this->renderPartial('_collection',[
			'brandModel' => $collection->brand,
			'collection' => $collection,
			'collectionItems' => $collectionItems,
		]);
	}

	public function actionAjaxbrand()
	{
		$model = Brand::model()->findByAttributes(['name' => Yii::app()->request->getParam('brandId')]);
		$this->renderPartial('catalog',[
			'activeCollectionId' => Yii::app()->request->getParam('activeId'),
			'model' => $model,
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