<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class NaGuildController extends ModuleController
{
    protected $moduleName = 'naGuilds';

    protected $indexColumns = [
        'guild_logo' => [
            'thumb' => true, // image column
            'variant' => [
                'role' => 'guild_logo',
                'crop' => 'flexible',
            ],
        ],
                
        'title' => [ // field column
            'title' => 'Title',
            'field' => 'title',
        ],
    ];
    
}
