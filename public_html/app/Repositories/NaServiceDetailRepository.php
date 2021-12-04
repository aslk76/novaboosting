<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\NaServiceDetail;

class NaServiceDetailRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(NaServiceDetail $model)
    {
        $this->model = $model;
    }

    public function allDetails()
    {
        return $this->model
            ->published()
            ->get();
   
    }
}
