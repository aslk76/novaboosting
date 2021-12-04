<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\PromoBanner;

class PromoBannerRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(PromoBanner $model)
    {
        $this->model = $model;
    }

    public function promoBanner()
    {
        return $this->model
            ->published()
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();
    }
}
