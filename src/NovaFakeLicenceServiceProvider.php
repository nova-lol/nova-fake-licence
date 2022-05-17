<?php

namespace NovaLol\FakeLicense;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;

class NovaFakeLicenceServiceProvider extends ServiceProvider
{
    public function register()
    {
        Http::fake(['nova.laravel.com/*' => Http::response(['success' => true], 204, [])]);
    }
}
