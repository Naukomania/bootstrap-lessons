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
$pages[5] = [
    'name'=>'Samsung Staron - Прайм-Стоун Ру',
    'title' => 'Fr148 Radiance (Shimmer) Пятый тайтл',
    'keywords' => 'Staron Sumsung Fr148 Shimmer столешницы'  ,
    'description' => 'Staron Sumsung Fr148 Shimmer - искусственный акриловый камень',
    'image'=>'/images/catalog/staron-fr148.jpg',
    'imagebig'=>'/images/catalog/staron-small-radiance-fr148.jpg',
    'logostaron'=>'/images/logostaron.jpg',
    'top_stone'=>[
        [
            'src' => '/samsung_staron/images/samsung_staron_tempest_fr148_radiance-1.jpg',
            'description' => 'Столешница 1',
        ],
        [
            'src' => '/samsung_staron/images/samsung_staron_tempest_fr148_radiance-2.JPG',
            'description' => 'Столешница 2',

        ],
        [
            'src' => '/samsung_staron/images/samsung_staron_tempest_fr148_radiance-3.JPG',
            'description' => 'Столешница 3',
        ],
    ],
    'additional_images' => [
        [
            'src' => ' /images/catalog/staron-fr148.jpg',
            'description' => 'LG',
        ],

        [
            'src' => '/images/catalog/staron-fr148.jpg',
            'description' => 'Hanex',

        ],
        [
            'src' => '/images/catalog/staron-fr148.jpg',
            'description' => 'Corian',
        ],
    ],
];

		$pages[1] = [
    'name'=>'Samsung Staron - Прайм-Стоун Ру',
    'title' => 'Fr148 Radiance (Shimmer) Первый тайтл',
    'keywords' => 'Staron Sumsung Fr148 Shimmer столешницы'  ,
    'description' => 'Staron Sumsung Fr148 Shimmer - искусственный акриловый камень',
    'image'=>'/images/catalog/staron-fr148.jpg',
    'imagebig'=>'/images/catalog/staron-small-radiance-fr148.jpg',
    'logostaron'=>'/images/logostaron.jpg',
    'top_stone'=>[
        [
            'src' => '/samsung_staron/images/samsung_staron_tempest_fr148_radiance-1.jpg',
            'description' => 'Столешница 1',
        ],
        [
            'src' => '/samsung_staron/images/samsung_staron_tempest_fr148_radiance-2.JPG',
            'description' => 'Столешница 2',

        ],
        [
            'src' => '/samsung_staron/images/samsung_staron_tempest_fr148_radiance-3.JPG',
            'description' => 'Столешница 3',
        ],
    ],
    'additional_images' => [
        [
            'src' => ' /images/catalog/staron-fr148.jpg',
            'description' => 'LG',
        ],

        [
            'src' => '/images/catalog/staron-fr148.jpg',
            'description' => 'Hanex',

        ],
        [
            'src' => '/images/catalog/staron-fr148.jpg',
            'description' => 'Corian',
        ],
    ],
];

        $page = $pages[$id];
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