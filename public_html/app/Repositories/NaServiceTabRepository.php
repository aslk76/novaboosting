<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\NaServiceTab;

class NaServiceTabRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(NaServiceTab $model)
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
