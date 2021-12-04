<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Streamer;

class StreamerRepository extends ModuleRepository
{
    use HandleSlugs;

    public function __construct(Streamer $model)
    {
        $this->model = $model;
    }

    public function allStreamers()
    {
        return $this->model
            ->published()->get();
    }
}
