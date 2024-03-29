<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\News;


class NewsRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function allNews()
    {
        return $this->model
            ->published()
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
   
    }
}
