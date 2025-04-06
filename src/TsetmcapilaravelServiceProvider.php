<?php

namespace Tsetmcapilaravel;

use Illuminate\Support\ServiceProvider;

class TsetmcapilaravelServiceProvider extends ServiceProvider
{
    public function register()
    {
        require_once __DIR__ . '/Helper.php';
    }

    public function boot()
    {
        //
    }
}
