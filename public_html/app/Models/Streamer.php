<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;

class Streamer extends Model 
{
    use HasSlug;

    protected $fillable = [
        'published',
        'title',
        'description',
        'username',

    ];
    
    public $slugAttributes = [
        'title',
    ];
    
}
