<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class PromoBanner extends Model 
{
    use HasMedias, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'caption',
        'link',
    ];
    
    public $mediasParams = [
        'promo_image' => [
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
            ],
        ],
    ];
}
