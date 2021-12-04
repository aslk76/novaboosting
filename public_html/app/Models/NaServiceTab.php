<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class NaServiceTab extends Model 
{
    use HasMedias;

    protected $fillable = [
        'published',
        'title',
        'pricelist',
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
        return $this->hasMany(NaServiceDetail::class);
    }
}
