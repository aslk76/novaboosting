<?php

namespace App\Http\Controllers;
use App\Repositories\EuGuildRepository;
use App\Repositories\NaGuildRepository;
use App\Repositories\GuildApplicationGuideRepository;
use App\Repositories\GlobalLinkRepository;
use App\Repositories\PromoBannerRepository;
use App\Repositories\LayoutImageRepository;
use App\Repositories\SliderImageRepository;

class GuildController extends Controller
{
    public function __construct(EuGuildRepository $euRepository, 
                                NaGuildRepository $naRepository, 
                                GuildApplicationGuideRepository $guideRepository,
                                GlobalLinkRepository $linkRepository,
                                PromoBannerRepository $promoRepository,
                                LayoutImageRepository $imgRepository,
                                SliderImageRepository $sliderRepository)
    {
        $this->euRepository = $euRepository;
        $this->naRepository = $naRepository;
        $this->guideRepository = $guideRepository;
        $this->linkRepository = $linkRepository;
        $this->promoRepository = $promoRepository;
        $this->imgRepository = $imgRepository;
        $this->sliderRepository = $sliderRepository;
    }

    public function euGuildsPage()
    {
        return view(
            'home.guilds',
            [
                'allianceGuilds' => $this->euRepository->allianceGuildsEu(),
                'hordeGuilds' => $this->euRepository->hordeGuildsEu(),
                'guide' => $this->guideRepository->guide(),
                'links' => $this->linkRepository->allLinks(),
                'promo' => $this->promoRepository->promoBanner(),
                'layoutImages' => $this->imgRepository->layoutImages(),
                'sliderImages' => $this->sliderRepository->allSliderImages()
            ]
        );
    }

    public function naGuildsPage()
    {
        return view(
            'home.guilds',
            [
                'allianceGuilds' => $this->naRepository->allianceGuildsNa(),
                'hordeGuilds' => $this->naRepository->hordeGuildsNa(),
                'guide' => $this->guideRepository->guide(),
                'links' => $this->linkRepository->allLinks(),
                'promo' => $this->promoRepository->promoBanner(),
                'layoutImages' => $this->imgRepository->layoutImages(),
                'sliderImages' => $this->sliderRepository->allSliderImages()
            ]
        );
    }
}
