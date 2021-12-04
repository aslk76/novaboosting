<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class GlobalLinkController extends ModuleController
{
    protected $moduleName = 'globalLinks';
    
    protected $indexOptions = [
        'permalink' => false
    ];
    
}
