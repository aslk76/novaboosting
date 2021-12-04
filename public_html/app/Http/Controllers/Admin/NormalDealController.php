<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class NormalDealController extends ModuleController
{
    protected $moduleName = 'normalDeals';
    
    protected $indexOptions = [
        'permalink' => false
    ];
    
}
