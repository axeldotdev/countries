<?php

namespace Axeldotdev\Countries\Tests;

use Axeldotdev\Countries\Country;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_returns_all_the_countries()
    {
        $countries = Country::all();

        $this->assertCount(27, $countries);
    }

    /** @test */
    public function it_returns_the_african_countries()
    {
        $countries = Country::africa();

        $this->assertCount(0, $countries);
    }

    /** @test */
    public function it_returns_the_antartican_countries()
    {
        $countries = Country::antartica();

        $this->assertCount(0, $countries);
    }

    /** @test */
    public function it_returns_the_asian_countries()
    {
        $countries = Country::asia();

        $this->assertCount(0, $countries);
    }

    /** @test */
    public function it_returns_the_european_countries()
    {
        $countries = Country::europe();

        $this->assertCount(27, $countries);
    }

    /** @test */
    public function it_returns_the_north_american_countries()
    {
        $countries = Country::northAmerica();

        $this->assertCount(23, $countries);
    }

    /** @test */
    public function it_returns_the_oceanian_countries()
    {
        $countries = Country::oceania();

        $this->assertCount(13, $countries);
    }

    /** @test */
    public function it_returns_the_south_american_countries()
    {
        $countries = Country::southAmerica();

        $this->assertCount(12, $countries);
    }
}
