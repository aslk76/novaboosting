<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\SliderImage;

class SliderImageRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(SliderImage $model)
    {
        $this->model = $model;
    }

    public function allSliderImages()
    {
        return $this->model
            ->published()
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
