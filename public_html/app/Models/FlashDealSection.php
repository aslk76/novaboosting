<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class FlashDealSection extends Model 
{
    use HasSlug, HasMedias;

    public function flashDeals()
    {
        return $this->hasMany(FlashDeal::class)->orderBy('position');
    }

    protected $fillable = [
        'published',
        'title',
        'description',
        'region'
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
    public $mediasParams = [
        'flash_deal_banner' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 9 / 2,
                ],
            ],
        ],
    ];
}
