<?php

namespace App\Models;

use Spatie\TranslationLoader\LanguageLine;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class TranslationLine extends LanguageLine
{
    use CrudTrait;

    protected $fillable = [
        'group',
        'key',
        'text',
    ];

    protected $casts = [
        'text' => 'array',
    ];
}
