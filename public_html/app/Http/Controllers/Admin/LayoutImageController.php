<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class LayoutImageController extends ModuleController
{
    protected $moduleName = 'layoutImages';
    
    protected $indexOptions = [
        'permalink' => false
    ];

    protected $indexColumns = [
        'backgroundImg' => [
            'thumb' => true, // image column
            'variant' => [
                'role' => 'backgroundImg',
                'crop' => 'flexible',
            ],
        ],
                
        'title' => [ // field column
            'title' => 'Title',
            'field' => 'title',
        ],
    ];
    
}
