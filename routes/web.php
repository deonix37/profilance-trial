<?php

use App\Http\Controllers\ShortLinkController;
use Illuminate\Support\Facades\Route;

Route::name('shortLinks.')->group(function () {
    Route::get('/', [ShortLinkController::class, 'create'])
        ->name('create');
    Route::get('/{shortLink:code}', [ShortLinkController::class, 'show'])
        ->name('show');
});
