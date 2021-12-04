<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class PromoBannerController extends ModuleController
{
    protected $moduleName = 'promoBanners';
    
    protected $indexOptions = [
        'permalink' => false
    ];

    protected $indexColumns = [
        'promo_image' => [
            'thumb' => true, // image column
            'variant' => [
                'role' => 'promo_image',
                'crop' => 'flexible',
            ],
        ],
                
        'title' => [ // field column
            'title' => 'Title',
            'field' => 'title',
        ],
    ];
    
}
