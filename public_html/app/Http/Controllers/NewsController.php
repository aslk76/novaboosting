<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;
use App\Repositories\GlobalLinkRepository;
use App\Repositories\PromoBannerRepository;
use App\Repositories\LayoutImageRepository;
use App\Repositories\SliderImageRepository;



class NewsController extends Controller
{
    public function __construct(NewsRepository $repository, 
                                GlobalLinkRepository $linkRepository,
                                PromoBannerRepository $promoRepository,
                                LayoutImageRepository $imgRepository,
                                SliderImageRepository $sliderRepository)
    {
        $this->repository = $repository;
        $this->linkRepository = $linkRepository;
        $this->promoRepository = $promoRepository;
        $this->imgRepository = $imgRepository;
        $this->sliderRepository = $sliderRepository;
    }

        public function newspage()
    {
        return view(
            'home.index',
            [
                'news' => $this->repository->allNews(),
                'links' => $this->linkRepository->allLinks(),
                'promo' => $this->promoRepository->promoBanner(),
                'layoutImages' => $this->imgRepository->layoutImages(),
                'sliderImages' => $this->sliderRepository->allSliderImages()
            ]
        );

    }
}
