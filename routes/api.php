<?php

use App\Http\Controllers\Api\ShortLinkController;
use Illuminate\Support\Facades\Route;

Route::name('api.')->group(function () {
    Route::apiResource(
        'shortLinks',
        ShortLinkController::class,
        ['only' => ['store', 'show']],
    );
});
