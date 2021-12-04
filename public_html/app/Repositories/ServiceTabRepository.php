<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\ServiceTab;

class ServiceTabRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(ServiceTab $model)
    {
        $this->model = $model;
    }

    public function allTabs()
    {
        return $this->model
            ->published()
            ->get();
    }
}
