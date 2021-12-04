<?php

return [
    'news' => [
        'title' => 'News',
        'module' => true
    ],

    'streamers' => [
        'title' => 'Streamers',
        'module' => true
    ],
    
    'services' => [
        'title' => 'Services',
        'route' => 'admin.services.flashDealSections.index',
        'primary_navigation' => [
            'flashDealSections' => [
                'title' => 'Flash Deals',
                'module' => true
            ],
            'normalDealSections' => [
                'title' => 'Deals',
                'module' => true
            ],
            'eu_services' => [
                'title' => 'EU Services',
                'route' => 'admin.services.eu_services.serviceTabs.index',
                'secondary_navigation' => [
                    'serviceTabs' => [
                        'title' => 'Tabs, Banners and Prices',
                        'module' => true,
                    ],
                    'serviceDetails' => [
                        'title' => 'Service Details',
                        'module' => true,
                    ],
                ],
            ],
            'na_services' => [
                'title' => 'NA Services',
                'route' => 'admin.services.na_services.naServiceTabs.index',
                'secondary_navigation' => [
                    'naServiceTabs' => [
                        'title' => 'Tabs, Banners and Prices',
                        'module' => true,
                    ],
                    'naServiceDetails' => [
                        'title' => 'Service Details',
                        'module' => true,
                    ],
                ],
            ],
            

        ]
    ],

    'guilds' => [
        'title' => 'Guilds',
        'route' => 'admin.guilds.euGuilds.index',
        'primary_navigation' => [
            'euGuilds' => [
                'title' => 'EU Guilds',
                'module' => true
            ],
            'naGuilds' => [
                'title' => 'NA Guilds',
                'module' => true
            ],
            'guildApplicationGuides' => [
                'title' => 'Guild Application Guide',
                'module' => true
            ]
        ]
    ],

    'settings' => [
        'title' => 'Layout Settings',
        'route' => 'admin.settings.layoutImages.index',
        'primary_navigation' => [
            'layoutImages' => [
                'title' => 'Background & Logos',
                'module' => true
            ],
            'promoBanners' => [
                'title' => 'Promo Banner Config',
                'module' => true
            ],
            'globalLinks' => [
                'title' => 'Global Links',
                'module' => true
            ],
            'sliderImages' => [
                'title' => 'Slider Images',
                'module' => true
            ],
        ]
    ]
];
