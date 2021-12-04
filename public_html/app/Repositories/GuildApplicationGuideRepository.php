<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\GuildApplicationGuide;

class GuildApplicationGuideRepository extends ModuleRepository
{
    use HandleSlugs;

    public function __construct(GuildApplicationGuide $model)
    {
        $this->model = $model;
    }

    public function guide()
    {
        return $this->model
            ->published()
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();
   
    }
}

