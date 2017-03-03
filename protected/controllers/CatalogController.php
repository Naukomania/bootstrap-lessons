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
		$this->render('catalog',[
			'page' => $item,
			'collection' => $item['collection']
		]);
	}

	public function actionLg_hi_macs()
	{
		$item = Catalog::getItem('lg_hi_macs');
		$this->render('catalog',[
			'page' => $item,
			'collection' => $item['collection']
		]);

	}
	public function actionView($id)
	{


        $page = Stone::getItem($id);
		$this->render('stone', [
            'id' => $id,
            'page' => $page,
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