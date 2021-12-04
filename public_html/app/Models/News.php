<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class News extends Model implements Sortable
{
    use HasSlug, HasMedias, HasRevisions, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'button_text',
        'position',
        'link',
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
    public $mediasParams = [
        'news_image' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ],
            ],
        ],
    ];
}
