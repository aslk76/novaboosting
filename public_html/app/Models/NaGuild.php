<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class NaGuild extends Model 
{
    use HasSlug, HasMedias, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'wowprogress',
        'raiderio',
        'website',
        'faction',
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
    public $mediasParams = [
        'guild_logo' => [
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
            ],
        ],
    ];
}
