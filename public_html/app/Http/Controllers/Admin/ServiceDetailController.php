<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class ServiceDetailController extends ModuleController
{
    protected $moduleName = 'serviceDetails';

    protected $titleColumnKey = 'title';
    
    protected $indexColumns = [
        
        'service_image' => [
            'thumb' => true, // image column
            'variant' => [
                'role' => 'service_image',
                'crop' => 'default',
            ],
        ],
        
        'title' => [ // field column
            'title' => 'Service Title',
            'field' => 'title',
        ],
    
        'tab_id' => [ // field column
            'title' => 'Linked To Tab Number',
            'field' => 'service_tabs_id',
        ],
    ];
}
