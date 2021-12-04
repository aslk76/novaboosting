<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class NormalDealSection extends Model 
{
    use HasMedias;

    protected $fillable = [
        'published',
        'title',
        'description',
        'region',
    ];

    public function normalDeals()
    {
        return $this->hasMany(NormalDeal::class)->orderBy('position');
    }
    
    public $mediasParams = [
        'deal_banner' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 9 / 2,
                ],
            ],
        ],
    ];
}
