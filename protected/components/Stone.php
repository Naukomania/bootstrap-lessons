<?php
class Stone {
    public static function getItem($id) {

$pages[1] = [
    'name'=>'Samsung Staron - Прайм-Стоун Ру',
    'title' => 'Pebble Blue PB870',
    'keywords' => 'Staron Sumsung Fr148 Shimmer столешницы'  ,
    'description' => 'Staron Sumsung Fr148 Shimmer - искусственный акриловый камень',
    'image'=>'/samsung_staron/images/katalog/staron_pb870_pebble_blue.jpg',
    'imagebig'=>'/samsung_staron/images/katalog/staron_pb870_pebble_blue.jpg',
    'logo'=>'/images/logostaron.jpg',
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

$pages[5] = [
    'name'=>'LG Hi Macs - Прайм-Стоун Ру',
    'title' => 'Black Hole T001',
    'keywords' => 'Staron Sumsung Fr148 Shimmer столешницы'  ,
    'description' => 'Staron Sumsung Fr148 Shimmer - искусственный акриловый камень',
    'image'=>'/lg_hi_macs/images/catalog/lg_hi_macs_galaxy_t001_black_hole.jpg',
    'imagebig'=>'/lg_hi_macs/images/catalog/lg_hi_macs_galaxy_t001_black_hole.jpg',
    'logo'=>'/images/logo-lg-himacs.png',
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

        if (empty($pages[$id])) {
            return $pages[1];
        }
        return $pages[$id];
    }
}