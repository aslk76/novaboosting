<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StreamersController;
use App\Http\Controllers\GuildController;

use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home.index' );
// });

Route::get('/', [NewsController::class, 'newspage']);

Route::get('/services/eu', [ServicesController::class, 'eu_services_page']);
Route::get('/services/na', [ServicesController::class, 'na_services_page']);

Route::get('/services/flash-deals/eu', [ServicesController::class, 'eu_flash_deals_page']);
Route::get('/services/flash-deals/na', [ServicesController::class, 'na_flash_deals_page']);
Route::get('/services/deals/eu', [ServicesController::class, 'normal_deals_page']);
Route::get('/services/deals/na', [ServicesController::class, 'na_normal_deals_page']);

Route::get('/streamers', [StreamersController::class, 'streamerPage']);

Route::get('/guilds/eu', [GuildController::class, 'euGuildsPage']);
Route::get('/guilds/na', [GuildController::class, 'naGuildsPage']);

Route::get('/contact-form', [ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [ContactController::class, 'storeContactForm'])->name('contact-form.store');
