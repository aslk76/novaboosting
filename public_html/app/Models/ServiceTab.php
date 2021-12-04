<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class ServiceTab extends Model 
{
    use HasSlug, HasMedias, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'pricelist',
    ];
    
    public $slugAttributes = [
        'title',
    ];

       
    public $mediasParams = [
        'service_banner' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 9 / 2,
                ],
            ],
        ],
    ];

    //----------- Relationships
    public function service_detail()
    {
        return $this->hasMany(ServiceDetail::class);
    }
}
