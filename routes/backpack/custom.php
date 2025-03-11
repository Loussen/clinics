<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\CRUD.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('hospitals', 'HospitalsCrudController');
    Route::crud('doctors', 'DoctorsCrudController');
    Route::crud('faqs', 'FaqsCrudController');
    Route::crud('page', 'PageCrudController');
    Route::crud('services', 'ServicesCrudController');
    Route::crud('testimonials', 'TestimonialsCrudController');
    Route::crud('settings', 'SettingsCrudController');
    Route::crud('menu-item', 'MenuItemCrudController');
    Route::crud('sliders', 'SlidersCrudController');
    Route::crud('features', 'FeaturesCrudController');
    Route::crud('departments', 'DepartmentsCrudController');
}); // this should be the absolute last line of this file

/**
 * DO NOT ADD ANYTHING HERE.
 */
