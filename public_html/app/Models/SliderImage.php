<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class SliderImage extends Model 
{
    use HasMedias, HasRevisions;

    protected $fillable = [
        'published',
        'title',
    ];
    
    public $mediasParams = [
        'slider_image' => [
            'default' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
            ],
        ],
    ];
}
