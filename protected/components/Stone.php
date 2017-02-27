<?php
class Stone {
    public static function getItem($id) {
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
       return $pages[$id];
   }
}