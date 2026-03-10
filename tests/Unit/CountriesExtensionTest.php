<?php

namespace Xefi\Faker\Countries\Tests\Unit;

use Random\Randomizer;
use Xefi\Faker\Countries\Extensions\CountriesExtension;

final class CountriesExtensionTest extends TestCase
{
    protected array $countries = [];

    protected function setUp(): void
    {
        parent::setUp();

        $countriesExtension = new CountriesExtension(new Randomizer());
        $this->countries = (new \ReflectionClass($countriesExtension))->getProperty('countries')->getValue($countriesExtension);
    }

    public function testCountries()
    {
        for ($i = 0; $i < count($this->countries); $i++) {
            $country = $this->faker->country();

            $this->assertIsString($country);
            $this->assertNotEmpty($country);
        }
    }

    public function testCountryCodeIsoAlpha2()
    {
        for ($i = 0; $i < count($this->countries); $i++) {
            $code = $this->faker->unique()->countryCodeISOAlpha2();

            $this->assertIsString($code);
            $this->assertNotEmpty($code);
        }
    }

    public function testCountryCodeIsoAlpha3()
    {
        for ($i = 0; $i < count($this->countries); $i++) {
            $code = $this->faker->unique()->countryCodeISOAlpha3();

            $this->assertIsString($code);
            $this->assertNotEmpty($code);
        }
    }
}