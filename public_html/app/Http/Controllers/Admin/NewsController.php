<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class NewsController extends ModuleController
{
    protected $moduleName = 'news';

    protected $indexColumns = [
        'news_image' => [
            'thumb' => true, // image column
            'variant' => [
                'role' => 'news_image',
                'crop' => 'default',
            ],
        ],
                
        'title' => [ // field column
            'title' => 'Title',
            'field' => 'title',
        ],
    ];

}
