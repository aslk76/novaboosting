<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class NaServiceDetail extends Model 
{
    use HasMedias;

    protected $fillable = [
        'published',
        'title',
        'description',
        'service_tabs_id',
    ];
    
    public $mediasParams = [
        'service_image' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
                ],
            ],
        ],
    ];
}
