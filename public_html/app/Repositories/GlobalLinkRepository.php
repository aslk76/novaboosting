<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\GlobalLink;

class GlobalLinkRepository extends ModuleRepository
{
    

    public function __construct(GlobalLink $model)
    {
        $this->model = $model;
    }

    public function allLinks()
    {
        return $this->model
            ->published()
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();
    }
}
