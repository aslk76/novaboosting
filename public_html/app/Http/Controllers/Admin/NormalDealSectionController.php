<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class NormalDealSectionController extends ModuleController
{
    protected $moduleName = 'normalDealSections';
    
    protected $indexOptions = [
        'permalink' => false
    ];
    
}
