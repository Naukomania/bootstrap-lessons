<?php

class PriceController extends Controller
{
	public function actionIndex()
	{
		$brands = Brand::model()->findAll();
		$this->render('index',[
			'brands' => $brands,
		]);
		
	}
	public function actionQuartz()
	{
		$brands = Brand::model()->findAll();
		$this->render('quartz',[
			'brands' => $brands,
		]);
		
	}
	public function actionSkidka()
	{
		$brands = Brand::model()->findAll();
		$this->render('skidka',[
			'brands' => $brands,
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