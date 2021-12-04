<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\NormalDeal;

class NormalDealRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(NormalDeal $model)
    {
        $this->model = $model;
    }
}
