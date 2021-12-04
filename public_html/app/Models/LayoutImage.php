<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class LayoutImage extends Model 
{
    use HasMedias, HasRevisions;

    protected $fillable = [
        'published',
        'title',
    ];
    

    public $mediasParams = [
        'backgroundImg' => [
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
            ],
        ],
        'logo' => [
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
            ],
        ],
        'favIcon' => [
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
            ],
        ],
    ];
}
