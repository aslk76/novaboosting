<?php

use Illuminate\Support\Facades\Route;

// Register Twill routes here eg.
// Route::module('posts');

Route::module('news');
Route::module('serviceTabs');
Route::module('serviceDetails');
Route::module('streamers');
Route::module('euGuilds');

Route::group(['prefix' => 'services'], function () {
        Route::module('flashDealSections');
        Route::module('flashDeals');
        Route::module('normalDealSections');
        Route::module('normalDeals');
        Route::group(['prefix' => 'eu_services'], function () {
            Route::module('serviceTabs');
            Route::module('serviceDetails');
        });
        Route::group(['prefix' => 'na_services'], function () {
            Route::module('naServiceTabs');
            Route::module('naServiceDetails');
        });
    }
);

Route::group(['prefix' => 'guilds'], function () {
        Route::module('euGuilds');
        Route::module('naGuilds');
        Route::module('guildApplicationGuides');
    }
);

Route::group(['prefix' => 'settings'], function () {
    Route::module('globalLinks');
    Route::module('promoBanners');
    Route::module('layoutImages');
    Route::module('sliderImages');
    }
);