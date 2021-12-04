<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class SliderImageController extends ModuleController
{
    protected $moduleName = 'sliderImages';

    protected $indexOptions = [
        'permalink' => false
    ];

    protected $titleColumnKey = 'title';

    protected $indexColumns = [
        'slider_image' => [
            'thumb' => true, // image column
            'variant' => [
                'role' => 'slider_image',
                'crop' => 'default',
            ],
        ],
        'title' => [ // field column
            'title' => 'Title',
            'field' => 'title',
        ],
    ];


    
    
}
