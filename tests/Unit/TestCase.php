<?php

namespace Xefi\Faker\Countries\Tests\Unit;

use Xefi\Faker\Container\Container;
use Xefi\Faker\Countries\CountriesServiceProvider;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected Container $faker;

    protected function setUp(): void
    {
        Container::packageManifestPath('/tmp/packages.php');

        (new CountriesServiceProvider())->boot();

        $this->faker = new Container(false);
    }
}