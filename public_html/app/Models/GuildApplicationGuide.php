<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;

class GuildApplicationGuide extends Model 
{
    use HasSlug;

    protected $fillable = [
        'published',
        'title',
        'description',
        'titleWhite',
        'titleOrange',
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
}
