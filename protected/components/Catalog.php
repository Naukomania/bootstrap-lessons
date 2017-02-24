<?php
class Catalog {
    public static function getItem($name) {
        $items = [];

        // staron
        $items['staron'] = [
            'title' => 'Samsung Staron - искусственный акриловый камнень - Прайм-Стоун',
            'name' => 'Samsung Staron',
            'keywords' => 'Самсунг старон, samsung staron, staron, старон',
             'logoSrc'=>'/images/logostaron.jpg',
            'description' => 'Каталог цветов искусственного акрилового камня Samsung Staron (самсунг старон).',
        ];
        $items['staron']['collection'] = [
            'title' => 'Коллекция Aspen',
            'items' => [
                [
                    'title' => 'Aspen Brown - AB632',
                    'src' => '/samsung_staron/images/katalog/staron_ab632_aspen_brown.jpg',
                ],
                [
                    'title' => 'Aspen Brown - AB632',
                    'src' => '/samsung_staron/images/katalog/staron_ab632_aspen_brown.jpg',
                ],
            ],
        ];
//lg hi macs
        $items['lg_hi_macs'] = [
    'title' => 'LG Hi Macs - искусственный акриловый камнень - Прайм-Стоун',
    'name' => 'LG Hi Macs',
    'keywords' => 'LG Hi macs,  хай макс',
     'logoSrc'=>'/images/logo-lg-himacs.png',
    'description' => 'Каталог цветов искусственного акрилового камня LG Hi Macs (элджи хай макс).',
];
$items['lg_hi_macs']['collection'] = [
    'title' => 'Коллекция Marmo',
    'items' => [
        [
            'title' => 'Aspen Brown - AB632',
            'src' => '/samsung_staron/images/katalog/staron_ab632_aspen_brown.jpg',
        ],
        [
            'title' => 'Aspen Brown - AB632',
            'src' => '/samsung_staron/images/katalog/staron_ab632_aspen_brown.jpg',
        ],
    ],
];

        if(isset($items[$name])) {
            return $items[$name];
        }
        return [];
    }
}