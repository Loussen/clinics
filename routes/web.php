<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

$locales = implode('|',array_keys(Config::get('data.locales')));

function getRegistrar(): void
{
    Route::controller(MainController::class)->group(function () {
        Route::get('/', 'dashboard')->name('home');
        Route::get('/services', 'dashboard')->name('services');
    });
}

Route::group([
    'prefix' => '{locale?}',
    'where' => ['locale' => $locales],
    'middleware' => 'locale'
], function () {
    getRegistrar();
});
