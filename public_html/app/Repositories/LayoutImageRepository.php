<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;

use A17\Twill\Repositories\ModuleRepository;
use App\Models\LayoutImage;

class LayoutImageRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(LayoutImage $model)
    {
        $this->model = $model;
    }

    public function layoutImages()
    {
        return $this->model
            ->published()
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();
    }
}
