<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\NaGuild;

class NaGuildRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(NaGuild $model)
    {
        $this->model = $model;
    }

    public function allianceGuildsNa() {
        return $this->model
            ->where('faction', 'alliance')
            ->published()
            ->get();
    }

    public function hordeGuildsNa() {
        return $this->model
            ->where('faction', 'horde')
            ->published()
            ->get();
    }
}
