<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class NaServiceTabController extends ModuleController
{
    protected $moduleName = 'naServiceTabs';
    
    protected $indexOptions = [
        'permalink' => false
    ];

    protected $indexColumns = [
        
        'service_banner' => [
            'thumb' => true, // image column
            'variant' => [
                'role' => 'service_banner',
                'crop' => 'default',
            ],
        ],
        
        'title' => [ // field column
            'title' => 'Tab Name',
            'field' => 'title',
        ],

        'tab_id' => [ // field column
            'title' => 'Tab ID Number',
            'field' => 'id',
        ]
    ];
    
}
