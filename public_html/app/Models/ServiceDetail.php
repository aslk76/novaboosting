<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class ServiceDetail extends Model 
{
    use HasSlug, HasMedias, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'description',
        'service_tabs_id',

    ];
    
    public $slugAttributes = [
        'title',
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

    //--------- Relationships

    public function serviceTab()
    {
        return $this->belongsTo(ServiceTab::class);
    }
}
