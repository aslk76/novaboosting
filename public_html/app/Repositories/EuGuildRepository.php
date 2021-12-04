<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\EuGuild;

class EuGuildRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(EuGuild $model)
    {
        $this->model = $model;
    }

    public function allianceGuildsEu() {
        return $this->model
            ->where('faction', 'alliance')
            ->published()
            ->get();
    }

    public function hordeGuildsEu() {
        return $this->model
            ->where('faction', 'horde')
            ->published()
            ->get();
    }
}
