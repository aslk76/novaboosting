<?php

namespace App\Http\Controllers;

use App\Repositories\ServiceTabRepository;
use App\Repositories\ServiceDetailRepository;
use App\Repositories\NaServiceTabRepository;
use App\Repositories\NaServiceDetailRepository;
use App\Repositories\GlobalLinkRepository;
use App\Repositories\PromoBannerRepository;
use App\Repositories\LayoutImageRepository;
use App\Repositories\SliderImageRepository;
use App\Repositories\FlashDealSectionRepository;
use App\Repositories\NormalDealSectionRepository;

class ServicesController extends Controller
{
    public function __construct(ServiceTabRepository $tab_repository, 
                                ServiceDetailRepository $detail_repository,
                                NaServiceTabRepository $na_tab_repository, 
                                NaServiceDetailRepository $na_detail_repository,
                                GlobalLinkRepository $linkRepository,
                                PromoBannerRepository $promoRepository,
                                LayoutImageRepository $imgRepository,
                                SliderImageRepository $sliderRepository,
                                FlashDealSectionRepository $flashDealSectionRepository,
                                NormalDealSectionRepository $normalDealSectionRepository)
    {
        $this->tab_repository = $tab_repository;
        $this->detail_repository = $detail_repository;
        $this->na_tab_repository = $na_tab_repository;
        $this->na_detail_repository = $na_detail_repository;
        $this->linkRepository = $linkRepository;
        $this->promoRepository = $promoRepository;
        $this->imgRepository = $imgRepository;
        $this->sliderRepository = $sliderRepository;
        $this->flashDealSectionRepository = $flashDealSectionRepository;
        $this->normalDealSectionRepository = $normalDealSectionRepository;
    }

    public function eu_services_page()
    {
        return view(
            'home.services',
            [
                'tabs' => $this->tab_repository->allTabs(),
                'details' => $this->detail_repository->allDetails(),
                'links' => $this->linkRepository->allLinks(),
                'promo' => $this->promoRepository->promoBanner(),
                'layoutImages' => $this->imgRepository->layoutImages(),
                'sliderImages' => $this->sliderRepository->allSliderImages()
            ]
        );
    }

    public function na_services_page()
    {
        return view(
            'home.services',
            [
                'tabs' => $this->na_tab_repository->allTabs(),
                'details' => $this->na_detail_repository->allDetails(),
                'links' => $this->linkRepository->allLinks(),
                'promo' => $this->promoRepository->promoBanner(),
                'layoutImages' => $this->imgRepository->layoutImages(),
                'sliderImages' => $this->sliderRepository->allSliderImages()
            ]
        );
    }

    public function eu_flash_deals_page()
    {
        return view(
            'home.flashDeals',
            [
                'flash_deals' => $this->flashDealSectionRepository->eu_flash_deals_page(),
                'links' => $this->linkRepository->allLinks(),
                'promo' => $this->promoRepository->promoBanner(),
                'layoutImages' => $this->imgRepository->layoutImages(),
                'sliderImages' => $this->sliderRepository->allSliderImages()
            ]
        );
    }

    public function na_flash_deals_page()
    {
        return view(
            'home.flashDeals',
            [
                'flash_deals' => $this->flashDealSectionRepository->na_flash_deals_page(),
                'links' => $this->linkRepository->allLinks(),
                'promo' => $this->promoRepository->promoBanner(),
                'layoutImages' => $this->imgRepository->layoutImages(),
                'sliderImages' => $this->sliderRepository->allSliderImages()
            ]
        );
    }

    public function normal_deals_page()
    {
        return view(
            'home.normalDeals',
            [
                'normal_deals' => $this->normalDealSectionRepository->normal_deals_page(),
                'links' => $this->linkRepository->allLinks(),
                'promo' => $this->promoRepository->promoBanner(),
                'layoutImages' => $this->imgRepository->layoutImages(),
                'sliderImages' => $this->sliderRepository->allSliderImages()
            ]
        );
    }

    public function na_normal_deals_page()
    {
        return view(
            'home.normalDeals',
            [
                'normal_deals' => $this->normalDealSectionRepository->na_normal_deals_page(),
                'links' => $this->linkRepository->allLinks(),
                'promo' => $this->promoRepository->promoBanner(),
                'layoutImages' => $this->imgRepository->layoutImages(),
                'sliderImages' => $this->sliderRepository->allSliderImages()
            ]
        );
    }
}


