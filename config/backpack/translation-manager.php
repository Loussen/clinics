<?php

return [
    'translation_model' => App\Models\TranslationLine::class,

    'route_prefix' => 'admin',

    'routes' => [
        'translations' => 'translations',
    ],

    'languages' => [
        'en',
        'az',
        'ru',
    ],

    'show_language_item' => true,

    // Laravel 12 specific settings
    'file_paths' => [
        lang_path(),
    ],

    'create' => true,
    'groups' => [],
    'display_source' => true,
    'use_editable_columns' => true,
];
