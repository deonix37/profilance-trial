<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;

class ShortLinkController extends Controller
{
    public function create()
    {
        return view('shortLinks.create');
    }

    public function show(ShortLink $shortLink)
    {
        return redirect($shortLink->url);
    }
}
