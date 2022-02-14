<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class ShortLinkController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'url' => ['required', 'max:1000', 'url'],
        ]);

        do {
            $data['code'] = Str::random(5);
        } while (ShortLink::where('code', $data['code'])->exists());

        $shortLink = ShortLink::create($data);

        return Response::json($shortLink, 201, [
            'Location' => route('api.shortLinks.show', $shortLink),
            'X-Short-Link' => route('shortLinks.show', $shortLink),
        ]);
    }

    public function show(ShortLink $shortLink)
    {
        return $shortLink;
    }
}
