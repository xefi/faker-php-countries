<?php

namespace Xefi\Faker\Countries;

use Xefi\Faker\Countries\Extensions\CountriesExtension;
use Xefi\Faker\Providers\Provider;

class CountriesServiceProvider extends Provider
{
    public function boot(): void
    {
        $this->extensions([
            CountriesExtension::class
        ]);
    }
}