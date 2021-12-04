<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\FlashDeal;

class FlashDealRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(FlashDeal $model)
    {
        $this->model = $model;
    }
}
