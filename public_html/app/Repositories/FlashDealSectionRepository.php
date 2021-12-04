<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\FlashDealSection;

class FlashDealSectionRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(FlashDealSection $model)
    {
        $this->model = $model;
    }

    public function afterSave($object, $fields)
    {
        $this->updateRepeater($object, $fields, 'flashDeals', 'FlashDeal', 'flash-deal');
        parent::afterSave($object, $fields);
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object);
        $fields = $this->getFormFieldsForRepeater($object, $fields, 'flashDeals', 'FlashDeal', 'flash-deal');
        return $fields;
    }

    public function eu_flash_deals_page()
    {
        return $this->model
            ->published()
            ->where('region', 'eu')
            // ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();
    }

    public function na_flash_deals_page()
    {
        return $this->model
            ->published()
            ->where('region', 'na')
            // ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();
    }
}
