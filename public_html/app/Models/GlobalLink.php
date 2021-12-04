<?php

namespace App\Models;


use A17\Twill\Models\Model;

class GlobalLink extends Model 
{
    protected $fillable = [
        'published',
        'title',
        'emailAddress',
        'facebook',
        'instagram',
        'twitch',
        'twitter',
        'discord',
        'discordRequest',
        'patreon',
        'youtube',
    ];
}
