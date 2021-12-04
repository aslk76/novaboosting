<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\ServiceDetail;

class ServiceDetailRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(ServiceDetail $model)
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
