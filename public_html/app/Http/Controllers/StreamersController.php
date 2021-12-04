<?php

namespace App\Http\Controllers;

use App\Repositories\StreamerRepository;
use App\Repositories\GlobalLinkRepository;
use App\Repositories\PromoBannerRepository;
use App\Repositories\LayoutImageRepository;
use App\Repositories\SliderImageRepository;

class StreamersController extends Controller
{
    public function __construct(StreamerRepository $repository,
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

    public function streamerPage()
    {
        return view(
            'home.streamers',
            [
                'streamers' => $this->repository->allStreamers(),
                'links' => $this->linkRepository->allLinks(),
                'promo' => $this->promoRepository->promoBanner(),
                'layoutImages' => $this->imgRepository->layoutImages(),
                'sliderImages' => $this->sliderRepository->allSliderImages()
            ]
        );

    }
}
