<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\NormalDealSection;

class NormalDealSectionRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(NormalDealSection $model)
    {
        $this->model = $model;
    }

    public function afterSave($object, $fields)
    {
        $this->updateRepeater($object, $fields, 'normalDeals', 'normalDeal', 'normal-deal');
        parent::afterSave($object, $fields);
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object);
        $fields = $this->getFormFieldsForRepeater($object, $fields, 'normalDeals', 'normalDeal', 'normal-deal');
        return $fields;
    }

    public function normal_deals_page()
    {
        return $this->model
            ->published()
            ->where('region', 'eu')
            // ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();
    }
    public function na_normal_deals_page()
    {
        return $this->model
            ->published()
            ->where('region', 'na')
            // ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();
    }
}
